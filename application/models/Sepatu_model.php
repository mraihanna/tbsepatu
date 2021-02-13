<?php

class Sepatu_model extends CI_Model{
    public function getAllSepatu()
    {
        return $this->db->get('sepatu')->result_array();
    }


    public function tambahDataSepatu()
    {
        $data = [
            "Merk_Sepatu" => $this->input->post('Merk_Sepatu',true),
            "Jenis_Sepatu" => $this->input->post('Jenis_Sepatu',true),
            "Ukuran_Sepatu" => $this->input->post('Ukuran_Sepatu',true),
            "Harga_Sepatu" => $this->input->post('Harga_Sepatu',true),
            "Stok_Sepatu" => $this->input->post('Stok_Sepatu',true),
            "Tanggal_Pesanan" => $this->input->post('Tanggal_Pesanan',true),
            "Opsi_Pengiriman" => $this->input->post('Opsi_Pengiriman',true)
        ];

        $this->db->insert('sepatu', $data);
    }

    public function hapusDataSepatu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sepatu');
    }

    public function getSepatuById($id)
    {
        return $this->db->get_where('sepatu', ['id' => $id])->row_array();
    }

    public function ubahDataSepatu()
    {
        $data = [
            "Merk_Sepatu" => $this->input->post('Merk_Sepatu',true),
            "Jenis_Sepatu" => $this->input->post('Jenis_Sepatu',true),
            "Ukuran_Sepatu" => $this->input->post('Ukuran_Sepatu',true),
            "Harga_Sepatu" => $this->input->post('Harga_Sepatu',true),
            "Stok_Sepatu" => $this->input->post('Stok_Sepatu',true),
            "Tanggal_Pesanan" => $this->input->post('Tanggal_Pesanan',true),
            "Opsi_Pengiriman" => $this->input->post('Opsi_Pengiriman',true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('sepatu', $data);
    }

    public function cariDataSepatu()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('Merk_Sepatu', $keyword);
        $this->db->or_like('Jenis_Sepatu', $keyword);
        $this->db->or_like('Ukuran_Sepatu', $keyword);
        $this->db->or_like('Harga_Sepatu', $keyword);
        $this->db->or_like('Stok_Sepatu', $keyword);
        $this->db->or_like('Tanggal_Pesanan', $keyword);
        $this->db->or_like('opsi_pengiriman', $keyword);
        return $this->db->get('sepatu')->result_array();
    }
}