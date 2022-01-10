<?php

class Sepatu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sepatu_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }


    public function index()
    {
        $data['judul'] = 'Halaman Data Sepatu';
        $data['sepatu'] = $this->Sepatu_model->getAllSepatu();
        if ($this->input->post('keyword')) {
            $data['sepatu'] = $this->Sepatu_model->cariDataSepatu();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('sepatu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data["judul"] = 'Form Tambah Data Sepatu';


        $this->form_validation->set_rules('Merk_Sepatu', 'Merk Sepatu', 'valid_base64|required');
        $this->form_validation->set_rules('Jenis_Sepatu', 'Jenis Sepatu', 'required');
        $this->form_validation->set_rules('Ukuran_Sepatu', 'Ukuran Sepatu', 'required|numeric');
        $this->form_validation->set_rules('Harga_Sepatu', 'Harga Sepatu', 'required|numeric');
        $this->form_validation->set_rules('Stok_Sepatu', 'Stok Sepatu', 'required');
        $this->form_validation->set_rules('Tanggal_Pesanan', 'Tanggal Pesanan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('sepatu/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Sepatu_model->tambahDataSepatu();
            $this->session->set_flashdata('flash', ' Ditambahkan');
            redirect('sepatu');
        }
    }

    public function hapus($id)
    {
        $this->Sepatu_model->hapusDataSepatu($id);
        $this->session->set_flashdata('flash', ' Dihapus');
        redirect('sepatu');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Sepatu';
        $data['sepatu'] = $this->Sepatu_model->getSepatuById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('sepatu/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data["judul"] = 'Form Ubah Data Sepatu';
        $data["sepatu"] = $this->Sepatu_model->getSepatuById($id);
        $data['opsi_pengiriman'] = ['JNE', 'J&T', 'Pos Indonesia', 'Si Cepat', 'Ninja Express'];

        $this->form_validation->set_rules('Merk_Sepatu', 'Merk Sepatu', 'valid_base64|required');
        $this->form_validation->set_rules('Jenis_Sepatu', 'Jenis Sepatu', 'required');
        $this->form_validation->set_rules('Ukuran_Sepatu', 'Ukuran Sepatu', 'required|numeric');
        $this->form_validation->set_rules('Harga_Sepatu', 'Harga Sepatu', 'required|numeric');
        $this->form_validation->set_rules('Stok_Sepatu', 'Stok', 'required');
        $this->form_validation->set_rules('Tanggal_Pesanan', 'Tanggal Pesanan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('sepatu/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Sepatu_model->ubahDataSepatu($id);
            $this->session->set_flashdata('flash', ' diubah');
            redirect('sepatu');
        }
    }
}
