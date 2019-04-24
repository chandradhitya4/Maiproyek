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
    public function indexd()
    {
        $this->load->view('logindosen');
    }
    public function register()
	{
		$this->load->view('register');
    }
    public function registerd()
    {
        $this->load->view('registerdos');
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
    public function addos(){
        $fullname = $this->input->post('name');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            "name"=>$fullname,
            "email"=>$email,
            "username"=>$username,
            "password"=>$password,
            "status"=> "Dosen"
        );
        $this->Login_model->insert($data,'users');
        $this->session->set_flashdata('success_modul', 'true');
        redirect('Login/indexd');
    }
    public function check(){
        $data = $this->input->post();
        $login = $this->Login_model->check($data);
        
        if ($login){	
                $data = array(
                    'logodin' => 'logodin',
                    'username' => $login->username,
                    'password' => $login->password,
                    'status' => $login->status
                );
                
                $this->session->set_userdata($data);
                
                if( $this->session->userdata('status') == 'Admin'){
                    // redirect('Home_admin/index');
                    redirect('Home_dosen/index');
                }
                else if ( $this->session->userdata('status') == 'Dosen'){
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
    public function ceklogin()
    {

        if (isset($_POST['login'])) {
            $u = $this->input->post('email', true);
            $p = $this->input->post('password', true);
            $cek = $this->Login_model->getLoginData($u, $p);
            $hasil = count($cek==0);
            if ($hasil > 0) {
                $mlogin = $this->db->get_where('users', array('email' => $u, 'password' => $p))->row();
                $this->session->set_userdata($mlogin);
                if ($mlogin->status == 'Mahasiswa') {
                    redirect('Mahasiswa/Home_mahasiswa/index');
                } elseif ($mlogin->status == 'Dosen') {
                    redirect('Dosen/Home_dosen/index/');
                } else {
                    redirect('Login/index');
                }
            }
        }

    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Login/index');
    }

}