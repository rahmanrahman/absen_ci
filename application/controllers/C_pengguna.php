<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class C_pengguna extends CI_Controller{
	
	function __construct(){ 
		parent::__construct(); 
		if($this->session->userdata('status') != "login_user"){
			redirect('Login/pengguna');
		}
	}
	public function index(){
	 	$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$cek = $this->M_absen->detail_data($where,'pengguna'); 
		$cek1 = $cek->nip;
		$tgl = date('Y-m-d');

		$msk = $this->M_absen->status($cek1, $tgl, 'absen_masuk');
		$klr = $this->M_absen->status1($cek1, $tgl, 'absen_keluar');
		// die(var_dump($msk));
		$total_msk = $this->M_absen->total($cek1, 'absen_masuk');
		$total_klr = $this->M_absen->total($cek1, 'absen_keluar');
		$data['msk'] = $total_msk;
		$data['klr'] = $total_klr;

		// $status_absen = '';

		if($msk>0 && $klr>0){
			$data['status'] = 'absensi harian selesai';
					$this->load->view('pengguna/dashboard', $data);
		}

		elseif($msk>0 && $klr==0){
			$data['status'] = 'absen masuk selesai';
					$this->load->view('pengguna/dashboard', $data);
		}

		elseif($msk==0 && $klr>0){
			$data['status'] = 'belum absen masuk';
					$this->load->view('pengguna/dashboard', $data);
		}

		elseif($msk==0 && $klr==0){
			$data['status'] = 'belum absensi';
					$this->load->view('pengguna/dashboard', $data);
		}

	}

	public function Absen(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$detail = $this->M_absen->detail_data($where,'pengguna'); 
		$data['detail'] = $detail; 
		$data['cond'] = '';
		$this->load->view('pengguna/absen', $data);
	}

	// public function Absen_Keluar(){
	// 	$nama =  $this->session->userdata('nama');
	// 	$where = array('nama' => $nama);
	// 	$detail = $this->M_absen->detail_data($where,'pengguna'); 
	// 	$data['detail'] = $detail;
	// 	$this->load->view('pengguna/absen_keluar', $data);
	// }


	// public function Laporan_Absen_Masuk1(){
	// 	$nama =  $this->session->userdata('nama');
	// 	$where = array('nama' => $nama);
	// 	$cek = $this->M_absen->detail_data($where,'pengguna'); 
	// 	$cek1 = $cek->nip;
	// 	$where1 = array('nip' => $cek1);
	// 	$data['cek'] = $cek->nip;
	// 	$masuk = $this->M_absen->laporan($where1,'absen_masuk'); 
	// 	$keluar = $this->M_absen->laporan($where1,'absen_keluar'); 
	// 	$data['masuk'] = $masuk;
	// 	$data['keluar'] = $keluar;
	// 	$this->load->view('pengguna/laporan_absen_masuk1', $data);
	// }

	 public function Laporan_Absen(){
	 	$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$cek = $this->M_absen->detail_data($where,'pengguna'); 
		$cek1 = $cek->nip;
		$where1 = array('nip' => $cek1);
		$data['cek'] = $cek->nip;
        $data['absen'] = $this->M_absen->laporan1($cek1);
        $total_msk = $this->M_absen->total($cek1, 'absen_masuk');
		$total_klr = $this->M_absen->total($cek1, 'absen_keluar');
		$data['msk'] = $total_msk;
		$data['klr'] = $total_klr;
		$data['total'] = $total_msk + $total_msk;
        $this->load->view('pengguna/laporan_absen', $data);
    }

	public function Cetak_Laporan_Absen(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$cek = $this->M_absen->detail_data($where,'pengguna'); 
		$cek1 = $cek->nip;

		$dateA		= $this->input->post('dateA');
		$dateB		= $this->input->post('dateB');
		//untuk menampilkan data yang ada pada database
		$data['absen'] = $this->M_absen->cetak_laporan_guru($cek1, $dateA, $dateB);
		$this->load->view('admin/cetak_absen',$data);
	}



	public function Input_Absen_Masuk(){
		$nip = $this->input->post('nip');
		$tanggal = $this->input->post('tanggal');
		$jam = date('H:i');
		$keterangan = $this->input->post('keterangan');

		$tgl = date('Y-m-d');

		$cek = $this->M_absen->cond($nip, $tgl, 'absen_masuk');
		if($cek>0){
			$data['cond'] = 'sudah melakukan absensi';
			redirect('C_pengguna/Absen', $data);
		}
		else{
		$data = array(
		'nip'=>$nip,
		'tanggal'=>$tgl,
		'jam'=>$jam,
		'keterangan'=>$keterangan
		);
		$this->M_absen->input_data('absen_masuk', $data);
		$data['cond'] = 'Absensi Berhasil';
		redirect('C_pengguna/Absen', $data);
		}
	}

	public function Input_Absen_Keluar(){
		$nip = $this->input->post('nip');
		$tanggal_klr = $this->input->post('tanggal');
		$jam_klr = date('H:i');
		// $keterangan = $this->input->post('keterangan');

		$tgl = date('Y-m-d');

		$cek = $this->M_absen->cond1($nip, $tgl, 'absen_keluar');
		if($cek>0){
			$data['cond'] = 'sudah melakukan absensi';
			redirect('C_pengguna/Absen', $data);
		}
		else{
		$data = array(
		'nip'=>$nip,
		'tanggal_klr'=>$tgl,
		'jam_klr'=>$jam_klr
		// 'keterangan'=>$keterangan
		);

		$this->M_absen->input_data('absen_keluar', $data);
		$data['cond'] = 'Absensi Berhasil';
		redirect('C_pengguna/Absen', $data);
		}
	}


		public function Update_Guru(){
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$nip 		= $this->input->post('nip');
		$jabatan	= $this->input->post('jabatan');
		$passwordd 	= $this->input->post('password');
		$password = md5($passwordd);
		$foto 		= $this->input->post('foto');

		$where = array('nama' => $nama);
		$cek = $this->M_absen->cari_akun($where,'pengguna'); 
		if($cek>0){
			redirect('C_Pengguna/Edit_Profil');
		}else{
		
		$config['upload_path'] = './assets/dist/images/profile';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 5000; // max 5 MB
		$this->load->library('upload',$config);
		if($this->upload->do_upload('foto')){ 
			//jika upload berhasil maka isi variabel $foto = file_name
			$foto=$this->upload->data('file_name'); 
		}else{
			//jika gagal upload maka isi variabel $foto = 'no_image.jpg'
			echo "Upload Gagal";
			$foto='no_image.png';
		}			
		$data = array(
		'nama'=>$nama,
		'nip'=>$nip,
		'jabatan'=>$jabatan,
		'password'=>$password,
		'foto'=>$foto
		);
		$data_session = array( 'nama' => $nama, 'status' => "login_user");
			$this->session->set_userdata($data_session);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_absen->update_data($id,$data,'pengguna');
		redirect('C_Pengguna/Profil');
	}
	}

	public function Profil(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$cek = $this->M_absen->detail_data($where,'pengguna');
		$data['profil'] = $cek;
		$this->load->view('pengguna/profil', $data);
	}

		public function Edit_Profil(){
		$nama =  $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$cek = $this->M_absen->detail_data($where,'pengguna');
		$data['profil'] = $cek;
		$this->load->view('pengguna/edit_profil', $data);
	}

	

}