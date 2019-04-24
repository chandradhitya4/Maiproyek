<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_proyek extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Proyek_model');
        $this->load->library('session');

    }
    public function index()
    {
//        $query=$this->Proyek_model->get();
        //$data['header']='Tampil data';
        $pro['proyeks']=$this->Proyek_model->get()->result();
//        $data= array(
//            'header_'=>'MaiProyek',
//            'proyeks' => $query->result()
//
//        );
        $this->load->view('dosen/home_dosen',$pro);


    }
    public function addProyek()
    {

        if (isset($_POST['submit'])) {

            $inputan = $this->input->post(null, TRUE);
            $this->Proyek_model->add($inputan);
            redirect('Dosen/Home_dosen/index/');

        }
    }
}