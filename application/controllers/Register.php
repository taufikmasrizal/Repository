<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}
 
	public function index()
	{
		$this->load->view('formregister');
	}
 
	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[login.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$this->Auth->register($username,$password,$nama);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('Register');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('Register');
		}
	}
}