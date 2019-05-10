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
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    public function getLoginData($u,$p)
    {
        $this->db->where(array('email',$u));
        $this->db->where(array('password',$p));
        return $this->db->get('users')->row();
    }
    public function add_new_account($account)
    {
        $this->db->insert('users', $account);
    }
    // Sign In User
    public function authenticate_account($email, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        if ($query = $this->db->get())
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }
    // Check Email

    public function check_email($email){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        }
        else
        {
            return true;
        }
    }
    function verify_email($key)
    {
        $this->db->where('verification_key', $key);
        $this->db->where('is_email_verified', 'no');
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            $data = array(
                'is_email_verified'  => 'yes'
            );
            $this->db->where('verification_key', $key);
            $this->db->update('users', $data);
            return true;
        }
        else
        {
            return false;
        }
    }
    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified == 'yes')
                {
                    $store_password = $this->encrypt->decode($row->password);
                    if($password == $store_password)
                    {
                        $this->session->set_userdata('id', $row->id);
                    }
                    else
                    {
                        return 'Wrong Password';
                    }
                }
                else
                {
                    return 'First verified your email address';
                }
            }
        }
        else
        {
            return 'Wrong Email Address';
        }
    }
}


