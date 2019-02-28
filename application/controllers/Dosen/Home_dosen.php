<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_dosen extends CI_Controller {
	public function index()
	{
		$this->load->view('dosen/home_dosen');
	}
}
