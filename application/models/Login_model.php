<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	public function check($data){
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        
        $query = $this->db->get('users');
        
        if($query->num_rows()==1) {
            return $query->row(0);
        }else {
            return FALSE;
        }
        
        
    }
    public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }
    public function getLoginData($u,$p)
    {
        $this->db->where(array('email',$u));
        $this->db->where(array('password',$p));
        return $this->db->get('users')->row();





    }
}


