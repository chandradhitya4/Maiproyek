<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proyek_model extends CI_Model
{
    public function get($id=null){

        $this->db->select('*');
        $this->db->join('users', 'proyek.user_id = users.user_id', 'inner');
        return $this->db->get('proyek')->result_array();
    }
    public function gets(){

        $this->db->select('*');
        $this->db->from('proyek');
//        if($id!=null){
//            $this->db->where('proyek_id',$id);
//        }
        $query = $this->db->get();
        return $query;
    }
    public function gets_profile(){

        $this->db->select('*');
        $this->db->from('users');
//        if($id!=null){
//            $this->db->where('proyek_id',$id);
//        }
        $query = $this->db->get();
        return $query;
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('proyek');
        $this->db->join('users', 'proyek.user_id = users.user_id', 'inner');
        return $this->db->get_where('proyek', array('proyek_id' => $id))->result_array();
    }
    public function get_detail($table,$id,$val){
        $this->db->select('*');
//        if($id!=null){
//            $this->db->where('proyek_id',$id);
//        }
        return $this->db->get_where($table, array($id=>$val))->row();
    }
    public function get_profil($table,$id,$val){
        $this->db->select('*');
        $this->db->from('users');
//        if($id!=null){
//            $this->db->where('proyek_id',$id);
//        }
        return $this->db->get_where($table, array($id=>$val))->row();
    }
//    public function get_where(){
//        return $this->db->query("SELECT * FROM proyek WHERE status=Mahasiswa")->result();
//    }

    public function add($data)
    {
//        if ($this->session->userdata('username'))
//    {
//        $data = array(
//            'nama_proyek' => $this->Proyek_model->get(),
//            'universitas' => $this->Proyek_model->get(),
//            'fakultas' => $this->Proyek_model->get(),
//            'jurusan' => $this->Proyek_model->get(),
//            'deskripsi' => $this->Proyek_model->get(),
//            'bidang' => $this->Proyek_model->get(),
//            'keahlian' => $this->Proyek_model->get(),
//            'jum_mahasiswa' => $this->Proyek_model->get(),
//            'tawaran_min' => $this->Proyek_model->get(),
//            'tawaran_max' => $this->Proyek_model->get(),
//            'opsi_tawaran' => $this->Proyek_model->get(),
//        );
//        $this->parser->parse('admin/collections', $data);
//    }
//    else
//    {
//        redirect('admin/login', 'location');
//    }
//        if ($this->session->userdata('email')) {
            $param = array(
                'nama_proyek' => $data['nama_proyek'],
                'universitas' => $data['universitas'],
                'fakultas' => $data['fakultas'],
                'jurusan' => $data['jurusan'],
                'deskripsi' => $data['deskripsi'],
                'bidang' => $data['bidang'],
                'keahlian' => $data['keahlian'],
                'jum_mahasiswa' => $data['jum_mahasiswa'],
                'tawaran_min' => $data['tawaran_min'],
                'tawaran_max' => $data['tawaran_max'],
                'opsi_tawaran' => $data['opsi_tawaran'],
            );
            $this->db->insert('proyek', $param);
            return $this->db->insert_id();


        }
    public function edit($data){
        $param =array(
            'nama_proyek' => $data['nama_proyek'],
            'universitas' => $data['universitas'],
            'fakultas' => $data['fakultas'],
            'jurusan' => $data['jurusan'],
            'deskripsi' => $data['deskripsi'],
            'bidang' => $data['bidang'],
            'keahlian' => $data['keahlian'],
            'jum_mahasiswa' => $data['jum_mahasiswa'],
            'tawaran_min' => $data['tawaran_min'],
            'tawaran_max' => $data['tawaran_max'],
            'opsi_tawaran' => $data['opsi_tawaran'],
        );
        $this->db->set($param);
        $this->db->where('proyek_id',$data['id']);
        $this->db->update('proyek');

    }
    public function del($id){
        $this->db->where('proyek_id',$id);
        $this->db->delete('proyek');
    }

}
