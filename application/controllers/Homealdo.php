<?php

class Homealdo extends CI_Controller {
    public function index($nama = '')
    {
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->load->view('templatesaldo/header', $data);
        $this->load->view('homealdo/index', $data);
        $this->load->view('templatesaldo/footer');
    }
}