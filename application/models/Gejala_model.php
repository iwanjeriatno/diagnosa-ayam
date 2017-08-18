<?php

class Gejala_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->get('gejala');

			return $query->result_array();
		}
		$query = $this->db->get_where('gejala', array('kd_gejala' => $kode));
		return $query->row_array();
	}

	// kode gejala
	public function kd_gejala() {
		$query     = $this->db->get('gejala');
		$kode      = $query->num_rows();
		$kd_gejala = sprintf("%07d", $kode+1);
		return "G".$kd_gejala;
	}

	public function show($id = FALSE)
	{
		$query = $this->db->get_where('gejala', array('id' => $id));
		return $query->row_array();
	}

	public function store()
	{
		$data      = array(
			'kd_gejala'   => $this->input->post('kd_gejala'),
			'nama_gejala' => $this->input->post('nama_gejala'),
		);
		return $this->db->insert('gejala', $data);
	}

	public function update($id)
	{
		$data = array(
			'kd_gejala'   => $this->input->post('kd_gejala'),
			'nama_gejala' => $this->input->post('nama_gejala'),
		);
		$this->db->where('id', $id);
		return $this->db->update('gejala', $data);
	}

	public function destroy($id)
	{
		return $this->db->delete('gejala',array('id' => $id));
	}

}
