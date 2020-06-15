<?php

class User_model extends CI_model
{
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
}
