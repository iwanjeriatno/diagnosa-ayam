<?php

class Penyakit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('penyakit_model');
	}

	public function index()
	{
		$data['penyakit'] = $this->penyakit_model->index();
		$data['path']   = 'Penyakit';

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/penyakit/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function relasi_gejala()
	{
		$data['path'] = 'Penyakit dan Gejala';
		$penyakit     = array();
		$hasil                   = $this->penyakit_model->penyakit();
		$data['gejala']          = $this->penyakit_model->gejala();
		$data['total_gejala']    = $this->penyakit_model->total_gejala();
		$data['penyakit_gejala'] = $this->penyakit_model->penyakit_gejala();


		foreach ($hasil as $item) {
			$penyakit[$item['kd_penyakit']] = '('.$item['kd_penyakit'] .') - '. $item['jenis_penyakit'];
		}
		$data['option'] = $penyakit;

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/penyakit_gejala/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function show($no)
	{
		$data['penyakit_item'] = $this->penyakit_model->index($no);
		$data['path'] = 'Penyakit';
		$this->load->view('layouts/header', $data);
		$this->load->view('penyakit/details', $data);
		$this->load->view('layouts/footer');
	}

	// create penyakit
	public function create()
	{
		$data['path'] = 'Penyakit';
		$data['kd_penyakit']   = $this->penyakit_model->kd_penyakit();

		$this->form_validation->set_rules('kd_penyakit','Kode Penyakit','required');
		$this->form_validation->set_rules('jenis_penyakit','Jenis Penyakit','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/penyakit/create', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->penyakit_model->store();
			redirect('penyakit');
		}
	}

	// create relasi-gejala
	public function create_penyakit_gejala()
	{
		$data['path'] = 'Penyakit Ke Gejala';
		$this->penyakit_model->store_penyakit_gejala();
		redirect('penyakit/relasi-gejala');
	}

	public function edit($id)
	{
		$data['path'] = 'Penyakit';

		$this->form_validation->set_rules('kd_penyakit','Kode Penyakit','required');
		$this->form_validation->set_rules('jenis_penyakit','Jenis Penyakit','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		if($this->form_validation->run() == FALSE) {
			$data['penyakit_item'] = $this->penyakit_model->show($id);
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/penyakit/edit', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->penyakit_model->update($id);
			redirect('penyakit');
		}
	}

	public function delete($id)
	{
		$this->penyakit_model->destroy($id);
		redirect('penyakit');
	}

	public function delete_penyakit_gejala($id)
	{
		$this->penyakit_model->destroy_penyakit_gejala($id);
		redirect('penyakit/relasi-gejala');
	}
}
