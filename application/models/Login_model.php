<?php

class Login_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

  public function login($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

	public function show()
	{
		$query = $this->db->get('users');

		return $query->result();
	}

}
