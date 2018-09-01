<?php

class Laporan_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->select('a.*, b.username')
											  ->from('hasil_identifikasi a')
												->join('users b', 'b.id_user = a.id_user', 'left')
												->get();

			return $query->result_array();
		}
		$query = $this->db->get_where('laporan', array('id_diagnosa' => $kode));
		return $query->row_array();
	}

	public function show($id = FALSE)
	{
		$query = $this->db->get_where('laporan', array('id_user' => $id));
		return $query->row_array();
	}

	public function store()
	{
		$data      = array(
			'username'    => $this->input->post('username'),
			'password'    => md5($this->input->post('username')),
		);
		return $this->db->insert('laporan', $data);
	}

	public function update($id)
	{
		$data = array(
			'username'    => $this->input->post('username')
		);
		$this->db->where('id_user', $id);
		return $this->db->update('laporan', $data);
	}

	public function destroy($id)
	{
		return $this->db->delete('laporan',array('id_user' => $id));
	}

}
