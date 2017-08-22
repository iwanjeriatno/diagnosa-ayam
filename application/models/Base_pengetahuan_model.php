<?php

class Base_pengetahuan_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->get('base_pengetahuan');
			return $query->result_array();
		}
		$query = $this->db->get_where('base_pengetahuan', array('id' => $kode));
		return $query->row_array();
	}

	public function show($id = FALSE)
	{

	}

	public function store()
	{

	}

	public function update($id)
	{

	}

	public function destroy($id)
	{
	}

}
