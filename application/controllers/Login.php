<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

//fungsi-fungsi untuk user admin============================================
	public function log_cek(){
		$this->session->sess_destroy();
		$this->load->view('pengguna/login_user');
	}	

	public function validasi_admin(){ //validasi login
		$nama = $this->input->post('nama'); 
		$password = $this->input->post('password'); 
		$select='id';
		$where = array( 'nama' => $nama, 'password' => md5($password) ); 
		$cek = $this->M_login->cek_login($select,"admin",$where)->num_rows(); 
		if($cek > 0){
			$data_session = array( 'nama' => $nama, 'status' => "login_admin");
			$this->session->set_userdata($data_session);
			//echo "sukses";
			redirect(base_url("Admin/index"));
		}else{ 
			//echo "Username dan password salah !"; 
			redirect(base_url("Login/admin"));
			
		}
	}

//fungsi-fungsi untuk user mahasiswa ============================================
	public function pengguna(){
		$this->session->sess_destroy();
		$this->load->view('pengguna/login_user');
	}

	public function admin(){
		$this->session->sess_destroy();
		$this->load->view('admin/login_admin');
	}

	public function validasi_pengguna(){ //validasi login
		$nama = $this->input->post('nama'); 
		$password = $this->input->post('password'); 
		$select='id';
		$where = array( 'nama' => $nama, 'password' => md5($password) ); 
		$cek = $this->M_login->cek_login($select,"pengguna",$where)->num_rows(); 
		if($cek > 0){
			$data_session = array( 'nama' => $nama, 'status' => "login_user" );
			$this->session->set_userdata($data_session);
			echo "login sukses"; 
			redirect(base_url("C_pengguna/index"));
		}else{ 
			echo "NIM dan password salah !"; 
			redirect(base_url("Login/pengguna"));
		}


	}
	public function validasi_pnbt(){ //validasi login
		$nama = $this->input->post('nama'); 
		$password = $this->input->post('password'); 
		$select='id';
		$where = array( 'nama' => $nama, 'password' => md5($password) ); 
		$cek = $this->M_login->cek_login($select,"penerbit",$where)->num_rows(); 
		if($cek > 0){
			$data_session = array( 'nama' => $nama, 'status' => "login_pnbt" );
			$this->session->set_userdata($data_session);
			echo "login sukses"; 
			redirect(base_url("C_pengguna/index"));
		}else{ 
			echo "NIM dan password salah !"; 
			redirect(base_url("Login/penerbit"));
		}
	}

}

//end of file Login.php
//location : application\controllers\