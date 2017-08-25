<?php

class Users_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->get_where('users', array('role' => 'pengguna'));

			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('id_user' => $kode));
		return $query->row_array();
	}

	public function show($id = FALSE)
	{
		$query = $this->db->get_where('users', array('id_user' => $id));
		return $query->row_array();
	}

	public function store()
	{
		$data      = array(
			'username'    => $this->input->post('username'),
			'password'    => md5($this->input->post('username')),
		);
		return $this->db->insert('users', $data);
	}

	public function update($id)
	{
		$data = array(
			'username'    => $this->input->post('username')
		);
		$this->db->where('id_user', $id);
		return $this->db->update('users', $data);
	}

	public function destroy($id)
	{
		return $this->db->delete('users',array('id_user' => $id));
	}

}
