<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_model', 'user');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Rt1_model', 'rt1');
		$this->load->model('Rt2_model', 'rt2');
		$this->load->model('Rt3_model', 'rt3');
		$this->load->model('Rt4_model', 'rt4');
		$this->load->model('Rt5_model', 'rt5');
		$this->load->model('Rt6_model', 'rt6');
		$this->load->model('Rw5_model', 'rw5');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$queryrt1 =  $this->user->jumlah_rt1();
		$data['rt1'] = $queryrt1->rt1;

		$queryrt2 =  $this->user->jumlah_rt2();
		$data['rt2'] = $queryrt2->rt2;

		$queryrt3 =  $this->user->jumlah_rt3();
		$data['rt3'] = $queryrt3->rt3;

		$queryrt4 =  $this->user->jumlah_rt4();
		$data['rt4'] = $queryrt4->rt4;

		$queryrt5 =  $this->user->jumlah_rt5();
		$data['rt5'] = $queryrt5->rt5;

		$queryrt6 =  $this->user->jumlah_rt6();
		$data['rt6'] = $queryrt6->rt6;

		$queryrt7 =  $this->user->jumlah_rw5();
		$data['rw5'] = $queryrt7->rw5;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function changepassword()
	{
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('currentpassword', 'Current password', 'required|trim');
		$this->form_validation->set_rules('newpassword1', 'New password', 'required|trim|min_length[3]|matches[newpassword2]');
		$this->form_validation->set_rules('newpassword2', 'Repeat new password', 'required|trim|min_length[3]|matches[newpassword1]');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/changepassword', $data);
			$this->load->view('templates/footer');
		} else {

			$currentpassword = $this->input->post('currentpassword');
			$newpassword = $this->input->post('newpassword1');

			if (!password_verify($currentpassword, $data['user']['password'])) {
				$this->session->set_flashdata('password', 'Wrong current password');
				redirect('user/changepassword');
			} else {
				if ($currentpassword == $newpassword) {
					$this->session->set_flashdata('password', 'New password cannot be the same as current password');
					redirect('user/changepassword');
				} else {
					$password_hash = password_hash($newpassword, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', 'Password changed');
					redirect('auth/logout');
				}
			}
		}
	}

	public function rt1()
	{
		$data['title'] = 'Daftar Nama Warga RT1';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt1'] = $this->rt1->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rt1', $data);
		$this->load->view('templates/footer');
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

	public function rt2()
	{
		$data['title'] = 'Daftar Nama Warga RT2';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt2'] = $this->rt2->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rt2', $data);
		$this->load->view('templates/footer');
	}

	public function rt3()
	{
		$data['title'] = 'Daftar Nama Warga RT3';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt3'] = $this->rt3->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rt3', $data);
		$this->load->view('templates/footer');
	}

	public function rt4()
	{
		$data['title'] = 'Daftar Nama Warga RT4';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt4'] = $this->rt4->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rt4', $data);
		$this->load->view('templates/footer');
	}

	public function rt5()
	{
		$data['title'] = 'Daftar Nama Warga RT5';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt5'] = $this->rt5->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rt5', $data);
		$this->load->view('templates/footer');
	}

	public function rt6()
	{
		$data['title'] = 'Daftar Nama Warga RT6';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt6'] = $this->rt6->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rt6', $data);
		$this->load->view('templates/footer');
	}

	public function rw5()
	{
		$data['title'] = 'Daftar Nama Warga RW5';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rw5'] = $this->rw5->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/rw5', $data);
		$this->load->view('templates/footer');
	}

	public function modul_diabetes()
	{
		$data['title'] = 'Modul Diabetes';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// $data['rt6'] = $this->rt6->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('laporan/modul_diabetes', $data);
		$this->load->view('templates/footer');
	}

	public function modul_hipertensi()
	{
		$data['title'] = 'Modul Hipertensi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// $data['rt6'] = $this->rt6->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('laporan/modul_hipertensi', $data);
		$this->load->view('templates/footer');
	}
}
