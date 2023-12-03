<?php 
/**
 * 
 */
class M_pengguna extends CI_Model{
	//method yang dibuat di controller (Admin.php)
	public function tampil_data(){
	//pemanggilan data yang berada di tabel tb_mahasiswa
	return $this->db->get('pengguna')->result();
	}

	//method yang dibuat di controller (Admin.php)
	public function input_data($tabel,$data){
		//memasukan data inputan ke tabel tb_mahasiswa
		$this->db->insert($tabel, $data);
	}

	public function get_foto($id){
		$this->db->select('foto');
		$this->db->from('buku');
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
}

//end of file M_mahasiswa.php
//location application\model