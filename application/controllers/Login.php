<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
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
    public function add()
    {
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
//        $this->form_validation->set_rules('username', 'Name', 'required|trim');
////        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
//        $this->form_validation->set_rules('password', 'Password', 'required');
//        if ($this->form_validation->run()) {
//            $fullname = $this->input->post('name');
//            $email = $this->input->post('email');
//            $username = $this->input->post('username');
//            $password = md5($this->input->post('password'));
//            $verification_key = md5(rand());
//            $data = array(
//                "name" => $fullname,
//                "email" => $email,
//                "username" => $username,
//                "password" => $password,
//                "status" => "Mahasiswa",
//                'verification_key' => $verification_key
//            );

//            $this->Login_model->insert($data, 'users');
//            $this->session->set_flashdata('success_modul', 'true');
//            if($id > 0)
//            {
//                $subject = "Please verify email for login";
//                $message = "
//                    <p>Hi ".$this->input->post('name')."</p>
//                    <p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."Login/verify_email/".$verification_key."'>link</a>.</p>
//                    <p>Once you click this link your email will be verified and you can login into system.</p>
//                    <p>Thanks,</p>
//                    ";
//                $config = array(
//                    'protocol'  => 'smtp',
//                    'smtp_host' => 'ssl://mail.maiproyek.com',
//                    'smtp_port' => 465,
//                    'smtp_user'  => 'cs@maiproyek.com',
//                    'smtp_pass'  => 'kitaidealist',
//                    'mailtype'  => 'html',
//                    'wordwrap'   => TRUE
//                );
//                $this->load->library('email', $config);
//                $this->email->set_newline("\r\n");
//                $this->email->from('cs@maiproyek.com');
//                $this->email->to($this->input->post('email'));
//                $this->email->subject($subject);
//                $this->email->message($message);
//                if($this->email->send())
//                {
//                    $this->session->set_flashdata('message', 'Check in your email for email verification mail');
//                    redirect('Login/register');
//                }
//            }
//        }else{
//            redirect('Login/index');
//        }
        }

    public function addos(){
//        $fullname = $this->input->post('name');
//        $email = $this->input->post('email');
//        $username = $this->input->post('username');
//        $password = $this->input->post('password');
//        $data = array(
//            "name"=>$fullname,
//            "email"=>$email,
//            "username"=>$username,
//            "password"=>$password,
//            "status"=> "Dosen"
//        );
//        $this->Login_model->insert($data,'users');
//        $this->session->set_flashdata('success_modul', 'true');
//        redirect('Login/indexd');
        $account = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            "status"=> "Dosen"
        );
        $check = $this->Login_model->check_email($account['email']);
        if($check)
        {
            $this->Login_model->add_new_account($account);
            $this->session->set_flashdata('message', 'Registered successfully. Now login to your account.');
            redirect('Login/indexd', 'location');
        }
        else
        {
            $this->session->set_flashdata('message', 'Email already signed up. Use different email');
            redirect('Login/registerd', 'location');
        }
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
//        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
//        $this->form_validation->set_rules('user_password', 'Password', 'required');
//        if ($this->form_validation->run()) {
//            $result = $this->Login_model->can_login($this->input->post('email'), $this->input->post('password'));
//            if($result == ''){
//                $mlogin = $this->db->get_where('users', array('email', 'password'))->row();
//                $this->session->set_userdata($mlogin);
//                if ($mlogin->status == 'Mahasiswa') {
//                    redirect('Mahasiswa/Home_mahasiswa/index');
//                } elseif ($mlogin->status == 'Dosen') {
//                    redirect('Dosen/Home_dosen/index/');
//                } else {
//                    redirect('Login/index');
//                }
//            }else{
//                $this->session->set_flashdata('message',$result);
//                redirect('Login/index');
//        }
//    }else {
//        $this->index();
//        }
//        }
//        if (isset($_POST['login'])) {
//            $account = array(
//                'email' => $this->input->post('email'),
//                'password' => $this->input->post('password'),
//            );
//            $datad = $this->Login_model->getLoginData($account['email'], $account['password']);
//            if ($datad) {
//                $mlogin=$this->session->set_userdata('email', $account['email']);
//                if ($mlogin->status == 'Mahasiswa') {
//                    redirect('Mahasiswa/Home_mahasiswa/index');
//                } elseif ($mlogin->status == 'Dosen') {
//                    redirect('Dosen/Home_dosen/index/');
//                } else {
//                    redirect('Login/indexd');
//                }
//
//            } else {
//                $this->session->set_flashdata('message', 'Wrong email or password, try again.');
//                redirect('Login/index', 'location');
//            }
//        }
            if (isset($_POST['login'])) {
                $u = $this->input->post('email', true);
                $p = $this->input->post('password', true);
                $cek = $this->Login_model->getLoginData($u, $p);
                $hasil = count($cek == 0);
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
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value)
        {
            $this->session->unset_userdata($rows_value);
        }
        $this->session->sess_destroy();
        redirect('home','refresh');
    }

//    function verify_email()
//    {
//        if($this->uri->segment(5))
//        {
//            $verification_key = $this->uri->segment(5);
//            if($this->Login_model->verify_email($verification_key))
//            {
//                $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'Login/index">here</a></h1>';
//            }
//            else
//            {
//                $data['message'] = '<h1 align="center">Invalid Link</h1>';
//            }
//            $this->load->view('login', $data);
//        }
//    }

}