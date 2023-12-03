<?php 
/**
 * 
 */
class M_absen extends CI_Model{
	//method yang dibuat di controller (Admin.php)
	public function tampil_absen_masuk(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('absen_masuk')->result();
	}

	public function tampil_data_guru(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pengguna')->result();
	}

	public function tampil_data_admin(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('admin')->result();
	}

	public function total_akun($tabel){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get($tabel)->num_rows();
	}

	public function total_absensi($tabel){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get($tabel)->num_rows();
	}

	public function total_absen($tabel){
		$this->db->select('nip, COUNT(nip) as total');
		$this->db->group_by('nip');
		$this->db->order_by('total', 'desc');
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get($tabel)->result();
	}
	
	//method yang dibuat di controller (Admin.php)
	public function input_data($tabel,$data){
		//memasukan data inputan ke tabel tb_mahasiswa
		$this->db->insert($tabel, $data);
	}

	public function get_foto($id){
		$this->db->select('foto');
		$this->db->from('pengguna');
		$this->db->where('id',$id);
	return $this->db->get()->row(); 
	}

	//method yang dibuat di controller (Admin.php) untuk menghapus data
	public function hapus_data($id, $tabel){
		$this->db->where('id',$id);
		//menghapus data dari tabel tb_mahasiswa
		$this->db->delete($tabel);
	}

	//method yang dibuat di controller (Admin.php) untuk merubah data 
	public function get_data($id, $table){
		//merubah data dari tabel tb_mahasiswa
		//$this->db->from();
		$this->db->where('id',$id);
	return $this->db->get($table)->row();
	}
	
	//method yang dibuat di controller (Admin.php) untuk mengupdate data 
	public function update_data($id,$data,$table){
		$this->db->where('id',$id);
		//mengupdate data dari tabel tb_mahasiswa
		$this->db->update($table,$data);
	}
	//method yang dibuat di controller (Admin.php dan C_Mahasiswa) untuk menampilkan detail data 
	public function detail_data($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->row(); 
	}

	public function cari_akun($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->num_rows(); 
	}

	public function laporan($where, $table){
		$this->db->where($where);
	return $this->db->get($table)->result(); 
	}

	public function cond($where, $where1, $table){
		// $this->db->select('nip', 'tanggal');
		// $this->db->from('absen_masuk');
		$this->db->where('nip',$where);
		$this->db->where('tanggal',$where1);
	return $this->db->get($table)->row(); 
	}

	public function total($where, $table){
		// $this->db->select('nip', 'tanggal');
		// $this->db->from('absen_masuk');
		$this->db->where('nip',$where);
	return $this->db->get($table)->num_rows(); 
	}

	public function status($where, $where1, $table){
		// $this->db->select('nip', 'tanggal');
		// $this->db->from('absen_masuk');
		$this->db->where('nip',$where);
		$this->db->where('tanggal',$where1);
	return $this->db->get($table)->num_rows(); 
	}

	public function status1($where, $where1, $table){
		// $this->db->select('nip', 'tanggal');
		// $this->db->from('absen_masuk');
		$this->db->where('nip',$where);
		$this->db->where('tanggal_klr',$where1);
	return $this->db->get($table)->num_rows(); 
	}

	public function cond1($where, $where1, $table){
		// $this->db->select('nip', 'tanggal');
		// $this->db->from('absen_masuk');
		$this->db->where('nip',$where);
		$this->db->where('tanggal_klr',$where1);
	return $this->db->get($table)->row(); 
	}

	 public function laporan1($where1)
    {
        $this->db->select('
          absen_masuk.*, absen_keluar.id, absen_keluar.tanggal_klr, absen_keluar.jam_klr, 
        ');
        $this->db->from('absen_masuk');
        $this->db->join('absen_keluar', 'absen_masuk.nip = absen_keluar.nip');
        $this->db->where('absen_masuk.nip', $where1);

        // $this->db->where($where1);
        $query = $this->db->get();
        return $query->result();
    }

    	 public function laporan_admin()
    {
        $this->db->select('
          absen_masuk.*, absen_keluar.id, absen_keluar.tanggal_klr, absen_keluar.jam_klr, pengguna.nama, pengguna.jabatan 
        ');
        $this->db->from('absen_masuk');
        $this->db->join('absen_keluar', 'absen_masuk.nip = absen_keluar.nip');
        $this->db->join('pengguna', 'absen_masuk.nip = pengguna.nip');


        // $this->db->where($where1);
        $query = $this->db->get();
        return $query->result();
    }

    	 public function cetak_laporan_admin($dateA, $dateB)
    {
        $this->db->select('
          absen_masuk.*, absen_keluar.id, absen_keluar.tanggal_klr, absen_keluar.jam_klr, pengguna.nama, pengguna.jabatan 
        ');
        $this->db->from('absen_masuk');
        $this->db->join('absen_keluar', 'absen_masuk.nip = absen_keluar.nip');
        $this->db->join('pengguna', 'absen_masuk.nip = pengguna.nip');
        $this->db->where('absen_masuk.tanggal >=',$dateA);
       $this->db->where('absen_masuk.tanggal <=', $dateB);
       $this->db->where('absen_keluar.tanggal_klr >=',$dateA);
       $this->db->where('absen_keluar.tanggal_klr <=',$dateB);
        // $this->db->where('absen_keluar.tanggal_klr', BETWEEN '$dateA' AND '$dateB');
        // $this->db->where($where1);
        $query = $this->db->get();
        return $query->result();
    }

        	 public function cetak_laporan_guru($cek1, $dateA, $dateB)
    {
        $this->db->select('
          absen_masuk.*, absen_keluar.id, absen_keluar.tanggal_klr, absen_keluar.jam_klr, 
        ');
        $this->db->from('absen_masuk');
        $this->db->join('absen_keluar', 'absen_masuk.nip = absen_keluar.nip');
				$this->db->where('absen_masuk.nip', $cek1);
        $this->db->where('absen_masuk.tanggal >=',$dateA);
       $this->db->where('absen_masuk.tanggal <=', $dateB);
       $this->db->where('absen_keluar.tanggal_klr >=',$dateA);
       $this->db->where('absen_keluar.tanggal_klr <=',$dateB);
        // $this->db->where('absen_keluar.tanggal_klr', BETWEEN '$dateA' AND '$dateB');
        // $this->db->where($where1);
        $query = $this->db->get();
        return $query->result();
    }




}

//end of file M_mahasiswa.php
//location application\model