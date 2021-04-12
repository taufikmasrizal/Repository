<?php
class Login extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Model_admin');
	}
 
	public function index() 
	{
		$this->load->view("login");
	}
 
	public function admin()
	{
		$data['login'] = $this->Model_admin->login();
		$this->load->view('admin_home', $data);
	}
	public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}