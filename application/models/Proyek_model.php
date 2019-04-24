<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proyek_model extends CI_Model
{
    public function get($id=null){

        $this->db->select('*');
        $this->db->from('proyek');

        if($id!=null){
            $this->db->where('proyek_id',$id);
        }
        $query = $this->db->get();

        return $query;
    }
    public function add($data)
    {

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
}
