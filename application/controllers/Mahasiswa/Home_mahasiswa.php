<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home_mahasiswa extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Proyek_model');
        $this->load->library('session');

    }
	public function index()
	{
        $data['proyeks']=$this->Proyek_model->gets()->result();
		$this->load->view('mahasiswa/home_mahasiswa',$data);
	}
	public function detailProyek($id)
	{
        $data = array(
            'details' => $this->Proyek_model->get_detail('proyek','proyek_id',$id),
            'recommendations' => $this->Proyek_model->get()
        );
		$this->load->view('mahasiswa/detail_proyek',$data);
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
