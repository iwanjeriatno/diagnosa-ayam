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

	// penyakit
	public function penyakit()
	{
		$query = $this->db->order_by('id','desc')->get('penyakit');
		return $query->result_array();
	}

	// gejala
	public function gejala()
	{
		$query = $this->db->get('gejala');
		$total = $query->num_rows();
		return $query->result_array();
	}

	// penyakit-gejala
	public function penyakit_gejala()
	{
		$query = $this->db->select('a.id as kode, a.kd_gejala, a.kd_penyakit, jenis_penyakit, nama_gejala')
											->from('penyakit_gejala a')
											->join('penyakit b', 'b.kd_penyakit = a.kd_penyakit', 'left')
											->join('gejala c', 'c.kd_gejala = a.kd_gejala', 'left')
											->order_by('a.id','desc')
											->get();

		return $query->result_array();
	}

	// total gejala
	public function total_gejala()
	{
		$query = $this->db->get('gejala');
		$total = $query->num_rows();
		return $total;
	}

	// kode penyakit
	public function kd_penyakit() {
		$query     = $this->db->get('penyakit');
		$kode      = $query->num_rows();
		$kd_penyakit = sprintf("%03d", $kode+1);
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
			'jenis_penyakit' => ucfirst($this->input->post('jenis_penyakit')),
			'nama_latin'     => ucfirst($this->input->post('nama_latin')),
			'keterangan'     => ucfirst($this->input->post('keterangan')),
		);
		return $this->db->insert('penyakit', $data);
	}

	// store penyakit-gejala
	public function store_penyakit_gejala()
	{
		$penyakit_gejala = array();
		$kd_penyakit = $this->input->post('kd_penyakit');
		$kd_gejala   = $this->input->post('kd_gejala');

		for($a=1; $a<=count($kd_gejala); $a++) {
			foreach ($kd_gejala as $item) {
				$data      = array(
					'kd_penyakit' => $kd_penyakit,
					'kd_gejala'   => $item,
				);
			}
			$penyakit_gejala = $this->db->insert('penyakit_gejala', $data);
		}
		return $penyakit_gejala;
	}

	public function update($id)
	{
		$data = array(
			'kd_penyakit'    => $this->input->post('kd_penyakit'),
			'jenis_penyakit' => ucfirst($this->input->post('jenis_penyakit')),
			'nama_latin'     => ucfirst($this->input->post('nama_latin')),
			'keterangan'     => ucfirst($this->input->post('keterangan')),
		);
		$this->db->where('id', $id);
		return $this->db->update('penyakit', $data);
	}

	public function destroy($id)
	{
		return $this->db->delete('penyakit',array('id' => $id));
	}

	public function destroy_penyakit_gejala($id)
	{
		return $this->db->delete('penyakit_gejala',array('id' => $id));
	}

}
