<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rw5 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rw5_model', 'rw5');
    }

    public function simpan()
    {
        $this->rw5->simpan();
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rw5');
    }

    public function ubah()
    {
        $this->rw5->ubah();
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rw5');
    }

    public function hapus()
    {
        $this->rw5->hapus();
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rw5');
    }

    public function lap_pasien_hasil($id)
    {
        $id = decrypt_url($id);
        $data['title'] = 'Warga';
        $data['rw5_byNama1'] = $this->rw5->all_periksa_byId($id);
        $data['nama_warga'] = $this->rw5->all_periksa_byId($id)->result_array();
        $nama_warga = $data['nama_warga'][0]['nama_warga'];
        // var_dump($nama_warga);
        // die;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['rw5_byNama'] = $this->rw5->pasien_byNama($nama_warga);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/lap_pasien_hasil_rw5', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_periksa()
    {
        $this->rw5->simpan_periksa();
        // $id = $this->rw5->enc_url();
        // $enc_url = $this->rw5->rw5_byId($id);
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rw5');
    }

    public function ubah_periksa()
    {
        $this->rw5->ubah_periksa();
        // $id = $this->rw5->enc_url();
        // $enc_url = $this->rw5->rw5_byId($id);
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rw5');
    }

    public function hapus_periksa()
    {
        $this->rw5->hapus_periksa();
        // $id = $this->rw5->enc_url();
        // $enc_url = $this->rw5->rw5_byId($id);
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rw5');
    }
}
