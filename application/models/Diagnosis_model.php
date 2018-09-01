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

	// users
	public function username($id_user)
	{
		$query = $this->db->select('username')
											->from('users')
											->where('id_user', $id_user)
											->get();

		return $query->row();
	}

	// penyakit
	public function penyakit($kode)
	{
		$query = $this->db->select('a.id as kode, a.*, b.*')
											->from('solusi a')
											->join('penyakit b', 'b.kd_penyakit = a.kd_penyakit', 'left')
											->where('a.kd_penyakit', $kode)
											->get();

		return $query->row();
	}

	// simpan hasil
	public function store()
	{
		$data      = array(
			'hasil_identifikasi' => $this->input->post('hasil_identifikasi'),
			'pengobatan'         => $this->input->post('pengobatan'),
			'id_user'            => $this->input->post('id_user'),
		);
		return $this->db->insert('hasil_identifikasi', $data);
	}

	// laporan
	public function laporan($user)
	{
		$query = $this->db->select('a.*, b.*')
											->from('hasil_identifikasi a')
											->join('users b', 'b.id_user = a.id_user', 'left')
											->where('b.id_user', $user)
											->get();

		return $query->result();
	}
}
