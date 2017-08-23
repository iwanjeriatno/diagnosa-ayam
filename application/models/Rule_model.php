<?php

class Rule_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->select('a.*, b.nama_gejala, b.kd_gejala')
												->from('rule a')
												->join('gejala b', 'b.kd_gejala = a.kd_gejala', 'left')
												->get();

			return $query->result_array();
		}
		$query = $this->db->get_where('rule', array('id' => $kode));
		return $query->row_array();
	}

	public function index1($kode = FALSE)
	{
		if($kode == FALSE) {
			$query = $this->db->select('a.id as kode, a.*, b.kd_penyakit, b.kd_gejala')
												->from('rule a')
												->join('penyakit_gejala b', 'b.id = a.id_penyakit_gejala', 'left')
												->join('penyakit c', 'c.kd_penyakit = b.kd_penyakit', 'left')
												->join('gejala d', 'd.kd_gejala = b.kd_gejala', 'left')
												->get();

			return $query->result_array();
		}
		$query = $this->db->get_where('rule', array('id' => $kode));
		return $query->row_array();
	}

	public function rule($penyakit)
	{
		$query = $this->db->select('a.*, b.nama_gejala, b.kd_gejala')
											->from('rule a')
											->join('gejala b', 'b.kd_gejala = a.kd_gejala', 'left')
											->like('jika_ya', $penyakit, 'after')
											->or_like('jika_tidak', $penyakit, 'after')
											->get();
		return $query->result_array();
	}

	// penyakit gejala
	public function penyakit_gejala()
	{
		$query = $this->db->select('a.id as kode, b.kd_gejala as gejala_kd, b.nama_gejala, c.kd_penyakit as penyakit_kd, c.jenis_penyakit')
											->from('penyakit_gejala a')
											->join('penyakit c', 'c.kd_penyakit = a.kd_penyakit', 'left')
											->join('gejala b', 'b.kd_gejala = a.kd_gejala', 'left')
											->order_by('a.kd_penyakit', 'asc')
											->get();
		return $query->result();
	}

	// gejala
	public function gejala()
	{
		$query = $this->db->order_by('kd_gejala','asc')->get('gejala');
		return $query->result_array();
	}

	// penyakit
	public function penyakit()
	{
		$query = $this->db->order_by('kd_penyakit','asc')->get('penyakit');
		return $query->result_array();
	}

	public function show($id = FALSE)
	{

	}

	public function store()
	{
		$data      = array(
			'kd_gejala'  => $this->input->post('kd_gejala'),
			'jika_ya'    => $this->input->post('jika_ya'),
			'jika_tidak' => $this->input->post('jika_tidak'),
		);
		return $this->db->insert('rule', $data);
	}

	public function update($id)
	{

	}

	public function destroy($id)
	{
		return $this->db->delete('rule',array('id' => $id));
	}

}
