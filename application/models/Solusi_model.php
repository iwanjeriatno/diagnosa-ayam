<?php

class Solusi_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->get('solusi');

			return $query->result_array();
		}
		$query = $this->db->get_where('solusi', array('kd_solusi' => $kode));
		return $query->row_array();
	}

	// total solusi
	public function total_solusi()
	{
		$query = $this->db->get('solusi');
		$total = $query->num_rows();
		return $total;
	}

	// kode solusi
	public function kd_solusi() {
		$query     = $this->db->get('solusi');
		$kode      = $query->num_rows();
		$kd_solusi = sprintf("%07d", $kode+1);
		return "S".$kd_solusi;
	}

	public function show($id = FALSE)
	{
		$query = $this->db->get_where('solusi', array('id' => $id));
		return $query->row_array();
	}

	public function store()
	{
		$data      = array(
			'kd_solusi'   => $this->input->post('kd_solusi'),
			'solusi' => $this->input->post('solusi'),
		);
		return $this->db->insert('solusi', $data);
	}

	public function update($id)
	{
		$data = array(
			'kd_solusi'   => $this->input->post('kd_solusi'),
			'solusi' => $this->input->post('solusi'),
		);
		$this->db->where('id', $id);
		return $this->db->update('solusi', $data);
	}

	public function destroy($id)
	{
		return $this->db->delete('solusi',array('id' => $id));
	}

}
