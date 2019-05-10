<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class proyek_mahasiswa extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Proyek_model');
        $this->load->library('session');
        $this->load->library((array('form_validation', 'parser')));
        $this->load->helper('url');


    }
    public function detProducts($id){
//        $data = array(
//            'details' => $this->Proyek_model->get_detail('proyek','proyek_id',$id),
//            'recommendations' => $this->Proyek_model->gets()->row()
//        );
        $data['details']=$this->Proyek_model->get_detail('proyek','proyek_id',$id);
        $data['recommendations'] = $this->Proyek_model->gets()->row();


        $this->load->view('mahasiswa/detail_proyek', $data);


    }

}