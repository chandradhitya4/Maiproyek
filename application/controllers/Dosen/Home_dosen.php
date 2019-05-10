<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_dosen extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Proyek_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('parser');

    }
    public function index()
	{
        $data['proyeks']=$this->Proyek_model->gets()->result();
        $data['profile']=$this->Proyek_model->gets_profile()->result();
        $this->load->view('dosen/home_dosen',$data);

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

    public function detailProyekDosen($id)
    {$data = array(
        'details' => $this->Proyek_model->get_detail('proyek','proyek_id',$id),
        'recommendations' => $this->Proyek_model->get()
    );
        $this->load->view('dosen/detail_proyek_dosen',$data);
    }
    public function detProfile($id){
        $data['profile']=$this->Proyek_model->get_profil('users','user_id',$id);
        $this->load->view('dosen/profil_dosen', $data);
    }

}
