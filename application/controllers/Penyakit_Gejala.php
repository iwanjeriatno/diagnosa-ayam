<?php

class Penyakit_Gejala extends CI_Controller {

	public function __construct()
	{
		die('ok');
		parent::__construct();
		$this->load->model('penyakit_model');
		$this->load->model('penyakit_gejala_model');
	}

	public function index()
	{
		$data['path'] = 'Penyakit dan Gejala';
		$penyakit     = array();

		$hasil                   = $this->penyakit_gejala_model->penyakit();
		$data['gejala']          = $this->penyakit_gejala_model->gejala();
		$data['total_gejala']    = $this->penyakit_gejala_model->total_gejala();
		$data['penyakit_gejala'] = $this->penyakit_gejala_model->index();


		foreach ($hasil as $item) {
			$penyakit[$item['kd_penyakit']] = '('.$item['kd_penyakit'] .') - '. $item['jenis_penyakit'];
		}
		$data['option'] = $penyakit;

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/penyakit_gejala/index', $data);
		$this->load->view('admin/layouts/footer');
	}

	// create
	public function create()
	{
		$data['path'] = 'Penyakit Ke Gejala';
		$this->penyakit_gejala_model->store();
		redirect('penyakit/relasi-gejala');
	}

	// delete
	public function delete_($id)
	{
		$this->penyakit_gejala_model->destroy($id);
		redirect('penyakit/relasi-gejala');
	}

}
