<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_dosen extends CI_Controller {
	public function index()
	{
		$this->load->view('dosen/home_dosen');
	}
	public function buatProyek()
	{
		$this->load->view('dosen/buat_proyek');
	}
}
