<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){ 
		parent::__construct(); 
		if($this->session->userdata('status') != "login_admin"){
			redirect('Login/log_cek');
		}
	}

	public function index(){
		$nama = $this->session->userdata('nama');
		$where = array('nama' => $nama);
		$guru = $this->M_absen->total_akun('pengguna');
		$admin = $this->M_absen->total_akun('admin');
		$absen_masuk = $this->M_absen->total_absen('absen_masuk');
		$absen_keluar = $this->M_absen->total_absen('absen_keluar');
		$data['guru'] = $guru;
		$data['admin'] = $admin;
		$data['absen_masuk'] = $absen_masuk;
		$data['absen_keluar'] = $absen_keluar;

		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/templates/footerD', $data);
	}

	public function Akun_Guru(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['total'] = $this->M_absen->total_akun('pengguna');

		$data['guru'] = $this->M_absen->tampil_data_guru();

		$this->load->view('admin/guru',$data);
	}

	public function Akun_Admin(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['total'] = $this->M_absen->total_akun('admin');
		$data['admin'] = $this->M_absen->tampil_data_admin();

		$this->load->view('admin/admin',$data);
	}

	public function Laporan_Absen(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$msk = $this->M_absen->total_absensi('absen_masuk');
		$klr = $this->M_absen->total_absensi('absen_keluar');
		$data['absen'] = $this->M_absen->laporan_admin();
		$data['total'] = $msk + $klr;

		$this->load->view('admin/laporan_absen',$data);
	}

	public function Cetak_Laporan_Absen(){
		$dateA		= $this->input->post('dateA');
		$dateB		= $this->input->post('dateB');
		//untuk menampilkan data yang ada pada database
		$data['absen'] = $this->M_absen->cetak_laporan_admin($dateA, $dateB);
		$msk = $this->M_absen->total_absensi('absen_masuk');
		$klr = $this->M_absen->total_absensi('absen_keluar');
		$data['total'] = $msk + $klr;
		$this->load->view('admin/cetak_absen',$data);
	}

	public function Add_Guru(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		// $data['absen'] = $this->M_absen->laporan_admin();
		$this->load->view('admin/add_guru');
	}

	public function Tambah_Guru(){
		$nama		= $this->input->post('nama');
		$nip		= $this->input->post('nip');
		$jabatan 	= $this->input->post('jabatan'); 
		$passwordd	= $this->input->post('password');
		$password 	= md5($passwordd);
		$foto 		= $this->input->post('foto');
		//upload foto ke folder

		$where = array('nama' => $nama);
		$cek = $this->M_absen->cari_akun($where,'pengguna');
		if($cek>0){
			$this->load->view('admin/add_guru');
		} else{

		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 5000; // max 5 MB
		$this->load->library('upload',$config);
		if($this->upload->do_upload('foto')){ 
			//jika upload berhasil maka isi variabel $foto = file_name
			$foto=$this->upload->data('file_name'); 
		}else{
			//jika gagal upload maka isi variabel $foto = 'no_image.jpg'
			echo "Upload Gagal";
			$foto='no_image.jpg';
		}
		
		//data yang dikirim harus bertipe array
		$data = array(
		'nama'=>$nama,
		'nip'=>$nip,
		'jabatan'=>$jabatan,
		'password'=>$password,
		'foto'=>$foto
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_absen->input_data('pengguna', $data);
		redirect('Admin/Akun_Guru');
	}
	}

	public function Add_Admin(){
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		// $data['absen'] = $this->M_absen->laporan_admin();
		$this->load->view('admin/add_admin');
	}

	public function tambah_admin(){
		$nama		= $this->input->post('nama');
		$password	= $this->input->post('password');
		$where = array('nama' => $nama);
		$cek = $this->M_absen->cari_akun($where,'pengguna');
		if($cek>0){
			$this->load->view('admin/add_admin');
		} else{
		
		$data = array(
		'nama'=>$nama,
		'password'=>$password
		);
		$this->M_absen->input_data('admin', $data);
		redirect('Admin/Akun_Admin');
	}
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
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
			$this->load->view('admin/add_guru');
		} else{
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 5000; // max 5 MB
		$this->load->library('upload',$config);
		if($this->upload->do_upload('foto')){ 
			//jika upload berhasil maka isi variabel $foto = file_name
			$foto=$this->upload->data('file_name'); 
		}else{
			//jika gagal upload maka isi variabel $foto = 'no_image.jpg'
			echo "Upload Gagal";
			$foto='no_image.jpg';
		}			
		$data = array(
		'nama'=>$nama,
		'nip'=>$nip,
		'jabatan'=>$jabatan,
		'password'=>$password,
		'foto'=>$foto
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_absen->update_data($id,$data,'pengguna');
		redirect('Admin/Akun_Guru');
	}
	}

	public function Update_Admin(){
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$passwordd 	= $this->input->post('password');
		$password = md5($passwordd);

		if($nama == $this->session->userdata('nama')){

		$where = array('nama' => $nama);
		$cek = $this->M_absen->cari_akun($where,'pengguna');
		if($cek>0){
			$this->load->view('admin/add_admin');
		} else{
		$data = array(
		'nama'=>$nama,
		'password'=>$password
		);
		$data_session = array( 'nama' => $nama, 'status' => "login_user");
			$this->session->set_userdata($data_session);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_absen->update_data($id,$data,'admin');
		redirect('Admin/Akun_Admin');
	}
		}else{

		$where = array('nama' => $nama);
		$cek = $this->M_absen->cari_akun($where,'pengguna');
		if($cek>0){
			$this->load->view('admin/add_admin');
		} else{
		$data = array(
		'nama'=>$nama,
		'password'=>$password
		);
	
		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_absen->update_data($id,$data,'admin');
		redirect('Admin/Akun_Admin');
	}
	}
	}

	//fungsi untuk menghapus data
	public function Hapus_Guru($id){
		//ambil data nama file foto berdasarkan id
		$data = $this->M_absen->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path='./assets/foto/';
			//hapus data di folder
			@unlink($path.$data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_absen->hapus_data($id, 'pengguna');
		redirect('Admin/Akun_Guru');
	}

	public function Hapus_Admin($id){
		//ambil data nama file foto berdasarkan id
		$data = $this->M_absen->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path='./assets/foto/';
			//hapus data di folder
			@unlink($path.$data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_absen->hapus_data($id, 'admin');
		redirect('Admin/Akun_Admin');
	}

	
}
//end of file Admin.php
//location : application\controllers\