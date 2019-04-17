<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('mahasiswa/home_mahasiswa');
    }

    public function detailProyek()
    {
        $this->load->view('mahasiswa/detail_proyek');
    }

    public function progressProyek()
    {
        $this->load->view('mahasiswa/progress_proyek');
    }

    public function profilMahasiswa()
    {
        $this->load->view('mahasiswa/profil_mahasiswa');
    }
}
