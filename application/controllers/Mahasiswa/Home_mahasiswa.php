<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_mahasiswa extends CI_Controller {
	public function index()
	{
		$this->load->view('mahasiswa/home_mahasiswa');
	}
	public function detailProyek()
	{
		$this->load->view('mahasiswa/detail_proyek');
	}
}
