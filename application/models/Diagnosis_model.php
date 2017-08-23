<?php

class Diagnosis_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function init()
	{
			$query = $this->db->get_where('penyakit_gejala', array('kd_gejala' => 'G001'));
			return $query->row();
	}

	public function init_gejala($kode)
	{
		$query = $this->db->select('a.id as kode, a.kd_gejala, b.nama_gejala, a.jika_ya, a.jika_tidak')
											->from('rule a')
											->join('gejala b', 'b.kd_gejala = a.kd_gejala', 'left')
											->where('a.kd_penyakit', $kode)
											->get();

		return $query->result();
	}

	// gejala
	public function gejala($kode)
	{
		$query = $this->db->select('a.id as kode, a.*, b.nama_gejala')
											->from('rule a')
											->join('gejala b', 'b.kd_gejala = a.kd_gejala', 'left')
											->where('a.kd_gejala', $kode)
											->get();

		return $query->row();
	}

	// penyakit
	public function penyakit($kode)
	{
		$query = $this->db->where('kd_penyakit', $kode)->get('penyakit');

		return $query->row();
	}
}
