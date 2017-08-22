<?php

class Diagnosis_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function gejala($kode)
	{
		$query = $this->db->get_where('gejala', array('gejala_awal_ya' => $kode));
		return $query->result_array();
	}
}
