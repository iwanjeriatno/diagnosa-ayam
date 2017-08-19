<?php

class Penyakit_Gejala_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	// penyakit-gejala
	public function index()
	{
		$query = $this->db->select('a.id as kode, a.kd_gejala, a.kd_penyakit, jenis_penyakit, nama_gejala')
											->from('penyakit_gejala a')
											->join('penyakit b', 'b.kd_penyakit = a.kd_penyakit', 'left')
											->join('gejala c', 'c.kd_gejala = a.kd_gejala', 'left')
											->order_by('a.id','desc')
											->get();

		return $query->result_array();
	}

	// store
	public function store()
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

	// destroy
	public function destroy($id)
	{
		return $this->db->delete('penyakit_gejala',array('id' => $id));
	}

}
