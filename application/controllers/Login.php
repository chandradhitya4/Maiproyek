<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Login_model');
        $this->load->library('session');

    }
    public function index()
	{
		$this->load->view('login');
    } 
    public function register()
	{
		$this->load->view('register');
    } 
    public function add(){
    	$fullname = $this->input->post('name');
    	$email = $this->input->post('email');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$data = array(
    		"name"=>$fullname,
            "email"=>$email,
            "username"=>$username,
            "password"=>$password,
            "status"=> "Mahasiswa"
    	);
    	$this->Login_model->insert($data,'users');
    	$this->session->set_flashdata('success_modul', 'true');
    	redirect('Login/index');
    }
    public function check(){
        $data = $this->input->post();
        $login = $this->Login_model->check($data);
        
        if ($login){	
                $data = array(
                    'logodin' => 'logodin',
                    'username' => $login->username,
                    'password' => $login->password,
                    'level' => $login->level
                );
                
                $this->session->set_userdata($data);
                
                if( $this->session->userdata('level') == 'Admin'){
                    // redirect('Home_admin/index');
                    redirect('Home_dosen/index');
                }
                else if ( $this->session->userdata('level') == 'Dosen'){
                    redirect("Dosen/Home_dosen/index/".$this->session->userdata('username'));
                    // echo "travel";
                }
                else {
                    redirect('Mahasiswa/Home_mahasiswa/index');
                }
                
                
            }else{
                $this->session->set_flashdata('message','Error Login');
                redirect('Login/index');
            }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Login/index');
    }

}