<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt1_model', 'rt1');
    }

    public function simpan()
    {
        $this->rt1->simpan();
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rt1');
    }

    public function ubah()
    {
        $this->rt1->ubah();
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rt1');
    }

    public function hapus()
    {
        $this->rt1->hapus();
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rt1');
    }

    public function lap_pasien_hasil($id)
    {
        $id = decrypt_url($id);
        $data['title'] = 'Warga';
        $data['rt1_byNama1'] = $this->rt1->all_periksa_byId($id);
        $data['nama_warga'] = $this->rt1->all_periksa_byId($id)->result_array();
        $nama_warga = $data['nama_warga'][0]['nama_warga'];
        // var_dump($nama_warga);
        // die;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['rt1_byNama'] = $this->rt1->pasien_byNama($nama_warga);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/lap_pasien_hasil', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_periksa()
    {
        $this->rt1->simpan_periksa();
        // $id = $this->rt1->enc_url();
        // $enc_url = $this->rt1->rt1_byId($id);
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rt1');
    }

    public function ubah_periksa()
    {
        $this->rt1->ubah_periksa();
        // $id = $this->rt1->enc_url();
        // $enc_url = $this->rt1->rt1_byId($id);
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rt1');
    }

    public function hapus_periksa()
    {
        $this->rt1->hapus_periksa();
        // $id = $this->rt1->enc_url();
        // $enc_url = $this->rt1->rt1_byId($id);
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rt1');
    }
}
