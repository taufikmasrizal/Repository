<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
	public function index(){
		$this->load->view('login');
	}

	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->model_user->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id_login'] = $data->id_login;
				$sess_data['username'] = $data->username;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('level') == 'admin')
			{
				redirect('C_admin');
			}
			elseif($this->session->userdata('level') == 'member')
			{
				redirect('C_member');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('login');
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}