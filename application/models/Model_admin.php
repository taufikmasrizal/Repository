<?php

class Model_admin extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function login() {
 
		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$data = $this->db->query("SELECT * from login where username='$username' and password='$password' LIMIT 1 ");
		return $data->row();
	}
 
}