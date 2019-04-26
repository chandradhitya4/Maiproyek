<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_dosen extends CI_Controller {
	public function index()
	{

        $data['proyeks']=$this->Proyek_model->get()->result();
		$this->load->view('dosen/home_dosen',$data);

		$this->load->view('dosen/home_dosen');

	}
	public function buatProyek()
	{
		$this->load->view('dosen/buat_proyek');
	}
    public function profilDosen()
    {
        $this->load->view('dosen/profil_dosen');
    }
    public function progressDosen()
    {
        $this->load->view('dosen/progress_dosen');
    }

    public function detailProyekDosen()
    {
        $data['proyeks']=$this->Proyek_model->get()->result();
        $this->load->view('dosen/detail_proyek_dosen',$data);
    }

}
