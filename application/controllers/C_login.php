<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->model('model_user'); //memasukkan file model m_login.php ke dalam controller
	}

	function index(){
		$session = $this->session->userdata('isLogin'); //mengabil dari session apakah sudah login atau belum
		if($session == FALSE) //jika session false maka akan menampilkan halaman login{
			$this->load->view('login');
		}else{ //jika session true maka di redirect ke halaman dashboard
			redirect('dashboard');
		}

	function do_login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$cek = $this->model_user->cek_user($username,md5($password)); //melakukan persamaan data dengan database

		if(count($cek) == 1){ //cek data berdasarkan username &amp; pass
			foreach ($cek as $cek) {
					$level = $cek['level']; //mengambil data(level/hak akses) dari database
			}

			$this->session->set_userdata(array(
					'isLogin'   => TRUE, //set data telah login
					'username'  => $username, //set session username
					'level'      => $level, //set session hak akses
			)); 

			redirect('dashboard','refresh');  //redirect ke halaman dashboard
		}else{ //jika data tidak ada yng sama dengan database
			echo "<script>alert('Gagal Login!')</script>";
			redirect('login','refresh');
		}
	}
}