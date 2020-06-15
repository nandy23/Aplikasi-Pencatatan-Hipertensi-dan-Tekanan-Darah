<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

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

		$queryrt1 =  $this->admin->jumlah_rt1();
		$data['rt1'] = $queryrt1->rt1;

		$queryrt2 =  $this->admin->jumlah_rt2();
		$data['rt2'] = $queryrt2->rt2;

		$queryrt3 =  $this->admin->jumlah_rt3();
		$data['rt3'] = $queryrt3->rt3;

		$queryrt4 =  $this->admin->jumlah_rt4();
		$data['rt4'] = $queryrt4->rt4;

		$queryrt5 =  $this->admin->jumlah_rt5();
		$data['rt5'] = $queryrt5->rt5;

		$queryrt6 =  $this->admin->jumlah_rt6();
		$data['rt6'] = $queryrt6->rt6;

		$queryrt7 =  $this->admin->jumlah_rw5();
		$data['rw5'] = $queryrt7->rw5;


		// $notifikasi = $this->admin->notifikasi();
		// $msg = "";
		// foreach ($notifikasi->result_array() as $n) {
		// 	$kd_obat = $n['kd_obat'];
		// 	$qty = $n['qty'];
		// 	$selisih = $n['selisih'];

		// 	if ($selisih > 0 && $selisih < 30) {
		// 		$sc_msg[1] = '
		// 		<div class="alert alert-danger alert-dismissable" id="success-alert">
		// 		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		// 		<h4><strong>Peringatan !!!</strong></h4>
		// 		<p>Kode obat <strong>' . $kd_obat . '</strong> mendekati tanggal kadaluarsa </p>
		// 		</div>
		// 		';
		// 		foreach ($sc_msg as $sm) {
		// 			$msg .= $sm;
		// 			$this->session->set_flashdata('kadaluarsa', $msg);
		// 		}
		// 	} elseif ($selisih <= 0) {
		// 		$sc_msg[1] = '
		// 		<div class="alert alert-danger alert-dismissable" id="success-alert">
		// 		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		// 		<h4><strong>Peringatan !!!</strong></h4>
		// 		<p>Kode obat <strong>' . $kd_obat . '</strong> telah kadaluarsa </p>
		// 		</div>
		// 		';
		// 		foreach ($sc_msg as $sm) {
		// 			$msg .= $sm;
		// 			$this->session->set_flashdata('kadaluarsa', $msg);
		// 		}
		// 	}
		// }

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function user()
	{
		$data['title'] = 'Config User';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->db->where('id !=', 1);
		$data['config'] = $this->admin->getUser();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/configuser', $data);
		$this->load->view('templates/footer');
	}

	public function addUser()
	{

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['name'] = $this->admin->getUser();


		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!'
		]);

		$this->db->where('id !=', 1);
		$data['config'] = $this->admin->getUser();

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Config User';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/configuser', $data);
			$this->load->view('templates/footer');
		} else {
			$this->admin->add();
			$this->session->set_flashdata('message', 'add');
			redirect('admin/user');
		}
	}

	public function deleteUser($id)
	{
		$id = decrypt_url($id);
		$this->admin->delete($id);
		$this->session->set_flashdata('message', 'delete');
		redirect('admin/user');
	}

	public function aktifUser($id)
	{
		$id = decrypt_url($id);
		$this->admin->getUserById($id);
		$this->admin->aktif($id);
		$this->session->set_flashdata('message', 'useraktif');
		redirect('admin/user');
	}

	public function nonaktifUser($id)
	{
		$id = decrypt_url($id);
		$this->admin->getUserById($id);
		$this->admin->nonaktif($id);
		$this->session->set_flashdata('message', 'usernonaktif');
		redirect('admin/user');
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
			$this->load->view('admin/changepassword', $data);
			$this->load->view('templates/footer');
		} else {

			$currentpassword = $this->input->post('currentpassword');
			$newpassword = $this->input->post('newpassword1');

			if (!password_verify($currentpassword, $data['user']['password'])) {
				$this->session->set_flashdata('password', 'Wrong current password');
				redirect('admin/changepassword');
			} else {
				if ($currentpassword == $newpassword) {
					$this->session->set_flashdata('password', 'New password cannot be the same as current password');
					redirect('admin/changepassword');
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
		redirect('admin/rt1');
	}

	public function ubah()
	{
		$this->rt1->ubah();
		echo $this->session->set_flashdata('message', 'update');
		redirect('admin/rt1');
	}

	public function hapus()
	{
		$this->rt1->hapus();
		echo $this->session->set_flashdata('message', 'delete');
		redirect('admin/rt1');
	}

	public function rt2()
	{
		$data['title'] = 'Daftar Nama Warga RT2';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['rt2'] = $this->rt2->all_pasien();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/rt2', $data);
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
		$this->load->view('admin/rt3', $data);
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
		$this->load->view('admin/rt4', $data);
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
		$this->load->view('admin/rt5', $data);
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
		$this->load->view('admin/rt6', $data);
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
		$this->load->view('admin/rw5', $data);
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
