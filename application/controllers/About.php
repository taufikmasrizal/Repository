<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('about');
	}
	public function strukturorganisasi()
	{
		$this->load->view('aboutstrukturorganisasi');
	}
	public function saranadanprasarana()
	{
		$this->load->view('aboutsaranadanprasarana');
	}
}
