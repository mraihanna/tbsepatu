<?php

class Home extends CI_Controller {
    public function index($nama = '')
    {
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}