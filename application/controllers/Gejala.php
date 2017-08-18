<?php

class Gejala extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gejala_model');
	}

	public function index()
	{
		$data['gejala'] = $this->gejala_model->index();
		$data['path']   = 'Gejala';

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/gejala/index', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function show($no)
	{
		$data['gejala_item'] = $this->gejala_model->index($no);
		$data['path'] = 'Gejala';
		$this->load->view('layouts/header', $data);
		$this->load->view('news/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path'] = 'Gejala';
		$data['kd_gejala']   = $this->gejala_model->kd_gejala();

		$this->form_validation->set_rules('kd_gejala','Kode Gejala','required');
		$this->form_validation->set_rules('nama_gejala','Nama Gejala','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar');
			$this->load->view('admin/gejala/create', $data);
			$this->load->view('admin/layouts/footer');
		} else {
			$this->gejala_model->store();
			redirect('gejala');
		}
	}

	public function edit($id)
	{
		$data['path'] = 'Gejala';

		$this->form_validation->set_rules('kd_gejala','Kode Gejala','required');
		$this->form_validation->set_rules('nama_gejala','Nama Gejala','required');

		if($this->form_validation->run() == FALSE) {
			$data['gejala_item'] = $this->gejala_model->show($id);
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar');
			$this->load->view('admin/gejala/edit', $data);
			$this->load->view('admin/layouts/footer');
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
