<?php

class Admin_model extends CI_model
{
	public function getUserById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function getUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function jumlah_rt1()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rt1 FROM rt1");
		return $hsl->row();
	}

	public function jumlah_rt2()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rt2 FROM rt2");
		return $hsl->row();
	}

	public function jumlah_rt3()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rt3 FROM rt3");
		return $hsl->row();
	}

	public function jumlah_rt4()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rt4 FROM rt4");
		return $hsl->row();
	}

	public function jumlah_rt5()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rt5 FROM rt5");
		return $hsl->row();
	}

	public function jumlah_rt6()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rt6 FROM rt6");
		return $hsl->row();
	}

	public function jumlah_rw5()
	{
		$hsl = $this->db->query("SELECT COUNT(*) as rw5 FROM rw5");
		return $hsl->row();
	}

	public function add()
	{

		if ($this->input->post('akses') === "Admin_RW5") {
			$role_id = 10;
		} elseif ($this->input->post('akses') === "Admin_RW6") {
			$role_id = 11;
		} elseif ($this->input->post('akses') === "RW5") {
			$role_id = 9;
		} elseif ($this->input->post('akses') === "RT1") {
			$role_id = 3;
		} elseif ($this->input->post('akses') === "RT2") {
			$role_id = 4;
		} elseif ($this->input->post('akses') === "RT3") {
			$role_id = 5;
		} elseif ($this->input->post('akses') === "RT4") {
			$role_id = 6;
		} elseif ($this->input->post('akses') === "RT5") {
			$role_id = 7;
		} elseif ($this->input->post('akses') === "RT6") {
			$role_id = 8;
		}

		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash(1234, PASSWORD_DEFAULT),
			'role_id' => $role_id,
			'is_active' => 0
		];
		$this->db->insert('user', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	public function aktif($id)
	{
		$data = [
			"is_active" => 1
		];

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function nonaktif($id)
	{
		$data = [
			"is_active" => 0
		];

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
}
