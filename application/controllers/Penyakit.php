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

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/penyakit/index', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function show($no)
	{
		$data['penyakit_item'] = $this->penyakit_model->index($no);
		$data['path'] = 'Penyakit';
		$this->load->view('layouts/header', $data);
		$this->load->view('news/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path'] = 'Penyakit';
		$data['kd_penyakit']   = $this->penyakit_model->kd_penyakit();

		$this->form_validation->set_rules('kd_penyakit','Kode Penyakit','required');
		$this->form_validation->set_rules('jenis_penyakit','Jenis Penyakit','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar');
			$this->load->view('admin/penyakit/create', $data);
			$this->load->view('admin/layouts/footer');
		} else {
			$this->penyakit_model->store();
			redirect('penyakit');
		}
	}

	public function edit($id)
	{
		$data['path'] = 'Penyakit';

		$this->form_validation->set_rules('kd_penyakit','Kode Penyakit','required');
		$this->form_validation->set_rules('jenis_penyakit','Jenis Penyakit','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		if($this->form_validation->run() == FALSE) {
			$data['penyakit_item'] = $this->penyakit_model->show($id);
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar');
			$this->load->view('admin/penyakit/edit', $data);
			$this->load->view('admin/layouts/footer');
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
}
