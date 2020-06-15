<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rt5 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt5_model', 'rt5');
    }

    public function simpan()
    {
        $this->rt5->simpan();
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rt5');
    }

    public function ubah()
    {
        $this->rt5->ubah();
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rt5');
    }

    public function hapus()
    {
        $this->rt5->hapus();
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rt5');
    }

    public function lap_pasien_hasil($id)
    {
        $id = decrypt_url($id);
        $data['title'] = 'Warga';
        $data['rt5_byNama1'] = $this->rt5->all_periksa_byId($id);
        $data['nama_warga'] = $this->rt5->all_periksa_byId($id)->result_array();
        $nama_warga = $data['nama_warga'][0]['nama_warga'];
        // var_dump($nama_warga);
        // die;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['rt5_byNama'] = $this->rt5->pasien_byNama($nama_warga);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/lap_pasien_hasil_rt5', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_periksa()
    {
        $this->rt5->simpan_periksa();
        // $id = $this->rt5->enc_url();
        // $enc_url = $this->rt5->rt5_byId($id);
        echo $this->session->set_flashdata('message', 'add');
        redirect('user/rt5');
    }

    public function ubah_periksa()
    {
        $this->rt5->ubah_periksa();
        // $id = $this->rt5->enc_url();
        // $enc_url = $this->rt5->rt5_byId($id);
        echo $this->session->set_flashdata('message', 'update');
        redirect('user/rt5');
    }

    public function hapus_periksa()
    {
        $this->rt5->hapus_periksa();
        // $id = $this->rt5->enc_url();
        // $enc_url = $this->rt5->rt5_byId($id);
        echo $this->session->set_flashdata('message', 'delete');
        redirect('user/rt5');
    }
}
