<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_user');
		$this->auth->cek_auth(); //ngambil auth dari library
	}

	function index(){
		$ambil_akun = $this->model_user->ambil_user($this->session->userdata('username'));
		$data = array(
			'user'	=> $ambil_akun,
		);
		$stat = $this->session->userdata('level');
		
		if($stat==1){//admin
			$this->load->view('admin_home',$data);
		}else{ //user
			$this->load->view('user_home',$data);
		}
	}

	function login(){
		$session = $this->session->userdata('isLogin');
		if($session == FALSE){
			$this->load->view('login');
		}else{
			redirect('dashboard');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}