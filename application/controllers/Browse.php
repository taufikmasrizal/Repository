<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {

	public function year()
	{
		$this->load->view('browseyear');
	}
	public function subject()
	{
		$this->load->view('browsesubject');
	}
	public function division()
	{
		$this->load->view('browsedivisiyear');
	}
	public function Author()
	{
		$this->load->view('browseauthor');
	}
}
