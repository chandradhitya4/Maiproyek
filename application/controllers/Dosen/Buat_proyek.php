<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_proyek extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Proyek_model');
        $this->load->library('session');
        $this->load->library((array('form_validation', 'parser')));
        $this->load->helper('url');


    }
//    public function index()
//    {
////        $query=$this->Proyek_model->get();
//        //$data['header']='Tampil data';
//        $pro['proyeks']=$this->Proyek_model->get()->result();
////        $data= array(
////            'header_'=>'MaiProyek',
////            'proyeks' => $query->result()
////
////        );
//        $this->load->view('dosen/home_dosen',$pro);
//
//
//    }
    public function addProyek()
    {

        if (isset($_POST['submit'])) {

            $inputan = $this->input->post(null, TRUE);
            $this->Proyek_model->add($inputan);
            redirect('Dosen/Home_dosen/index/');

        }
    }
    public function detProduct($id){
        $data['details']=$this->Proyek_model->get_detail('proyek','proyek_id',$id);
        $data['recommendations'] = $this->Proyek_model->gets()->row();
        $this->load->view('dosen/detail_proyek_dosen', $data);
    }
    public function updatepro($id=null){

            $query = $this->Proyek_model->gets($id);
            $data = array(
                'updatepro'=>$query->row()
            );
            $this->load->view('dosen/edit_dosen',$data);
        }
        public function prosesedit(){
            if(isset($_POST['edit'])){
                $inputan = $this->input->post(null, TRUE);
                $this->Proyek_model->edit($inputan);
            }
            redirect("Dosen/home_dosen");
        }
    public function del($id)
    {
        $this->Proyek_model->del($id);
        redirect('Dosen/home_dosen');
    }

}