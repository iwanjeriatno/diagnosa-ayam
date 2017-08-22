<?php

class Gejala extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gejala_model');

		// authentication
		if($this->session->userdata('status' != 'login')) {
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data['gejala'] = $this->gejala_model->index();
		$data['path']   = 'Gejala';

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/gejala/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function relasi_solusi()
	{
		$data['path'] = 'Gejala';
		$gejala       = array();
		$hasil        = $this->gejala_model->gejala();

		foreach ($hasil as $item) {
			$gejala[$item['id']] = $item['nama_gejala'];
		}
		$data['option'] = $gejala;

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/gejala/relasi', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function show($no)
	{
		$data['gejala_item'] = $this->gejala_model->index($no);
		$data['path']        = 'Gejala';
		$this->load->view('layouts/header', $data);
		$this->load->view('gejala/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path']      = 'Gejala';
		$data['kd_gejala'] = $this->gejala_model->kd_gejala();
		$data['gejala']    = $this->gejala_model->gejala();

		// validation
		$this->form_validation->set_rules('kd_gejala','Kode Gejala','required');
		$this->form_validation->set_rules('nama_gejala','Nama Gejala','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/gejala/create', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->gejala_model->store();
			redirect('gejala');
		}
	}

	public function edit($id)
	{
		$data['path'] = 'Gejala';
		$data['gejala']    = $this->gejala_model->gejala();

		// validation
		$this->form_validation->set_rules('kd_gejala','Kode Gejala','required');
		$this->form_validation->set_rules('nama_gejala','Nama Gejala','required');

		if($this->form_validation->run() == FALSE) {
			$data['gejala_item'] = $this->gejala_model->show($id);
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/gejala/edit', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->gejala_model->update($id);
			redirect('gejala');
		}
	}

	public function delete($id)
	{
		$this->gejala_model->destroy($id);
		redirect('gejala');
	}
}
