<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt4 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt4_model', 'rt4');
    }

    public function simpan()
    {
        $this->rt4->simpan();
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rt4');
    }

    public function ubah()
    {
        $this->rt4->ubah();
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rt4');
    }

    public function hapus()
    {
        $this->rt4->hapus();
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rt4');
    }

    public function lap_pasien_hasil($id)
    {
        $id = decrypt_url($id);
        $data['title'] = 'Warga';
        $data['rt4_byNama1'] = $this->rt4->all_periksa_byId($id);
        $data['nama_warga'] = $this->rt4->all_periksa_byId($id)->result_array();
        $nama_warga = $data['nama_warga'][0]['nama_warga'];
        // var_dump($nama_warga);
        // die;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['rt4_byNama'] = $this->rt4->pasien_byNama($nama_warga);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/lap_pasien_hasil_rt4', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_periksa()
    {
        $this->rt4->simpan_periksa();
        // $id = $this->rt4->enc_url();
        // $enc_url = $this->rt4->rt4_byId($id);
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rt4');
    }

    public function ubah_periksa()
    {
        $this->rt4->ubah_periksa();
        // $id = $this->rt4->enc_url();
        // $enc_url = $this->rt4->rt4_byId($id);
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rt4');
    }

    public function hapus_periksa()
    {
        $this->rt4->hapus_periksa();
        // $id = $this->rt4->enc_url();
        // $enc_url = $this->rt4->rt4_byId($id);
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rt4');
    }
}
