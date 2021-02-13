<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
        $data['judul'] = 'Login';
		$this->load->view('v_login', $data);
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
            if ($username == "mraihanna18"){
			redirect(base_url("home"));
            }
            elseif($username == "aldodwrz"){
                redirect(base_url('homealdo'));
            }
		}else{
            $data['judul'] = 'Login';
			echo '<script>alert("Login Gagal");</script>';
            $this->load->view('v_login', $data);
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}