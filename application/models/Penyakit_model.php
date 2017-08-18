<?php

class Penyakit_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->get('penyakit');

			return $query->result_array();
		}
		$query = $this->db->get_where('penyakit', array('kd_penyakit' => $kode));
		return $query->row_array();
	}

	// kode penyakit
	public function kd_penyakit() {
		$query     = $this->db->get('penyakit');
		$kode      = $query->num_rows();
		$kd_penyakit = sprintf("%07d", $kode+1);
		return "P".$kd_penyakit;
	}

	public function show($id = FALSE)
	{
		$query = $this->db->get_where('penyakit', array('id' => $id));
		return $query->row_array();
	}

	public function store()
	{
		$data      = array(
			'kd_penyakit'    => $this->input->post('kd_penyakit'),
			'jenis_penyakit' => $this->input->post('jenis_penyakit'),
			'keterangan'     => $this->input->post('keterangan'),
		);
		return $this->db->insert('penyakit', $data);
	}

	public function update($id)
	{
		$data = array(
			'kd_penyakit'    => $this->input->post('kd_penyakit'),
			'jenis_penyakit' => $this->input->post('jenis_penyakit'),
			'keterangan'     => $this->input->post('keterangan'),
		);
		$this->db->where('id', $id);
		return $this->db->update('penyakit', $data);
	}

	public function destroy($id)
	{
		return $this->db->delete('penyakit',array('id' => $id));
	}

}
