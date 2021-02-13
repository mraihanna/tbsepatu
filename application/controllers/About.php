<?php

class About extends CI_Controller{
    public function index()
    {
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $data['judul'] = 'Halaman About';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');

    }
}