<?php

class Solusi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('solusi_model');
	}

	public function index()
	{
		$data['solusi'] = $this->solusi_model->index();
		$data['path']   = 'Solusi';

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/solusi/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function show($no)
	{
		$data['solusi_item'] = $this->solusi_model->index($no);
		$data['path'] = 'Solusi';
		$this->load->view('layouts/header', $data);
		$this->load->view('news/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path'] = 'Solusi';
		$data['kd_solusi']   = $this->solusi_model->kd_solusi();

		$this->form_validation->set_rules('kd_solusi','Kode Solusi','required');
		$this->form_validation->set_rules('solusi','Solusi','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/solusi/create', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->solusi_model->store();
			redirect('solusi');
		}
	}

	public function edit($id)
	{
		$data['path'] = 'Solusi';

		$this->form_validation->set_rules('kd_solusi','Kode Solusi','required');
		$this->form_validation->set_rules('solusi','Solusi','required');

		if($this->form_validation->run() == FALSE) {
			$data['solusi_item'] = $this->solusi_model->show($id);
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/solusi/edit', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->solusi_model->update($id);
			redirect('solusi');
		}
	}

	public function delete($id)
	{
		$this->solusi_model->destroy($id);
		redirect('solusi');
	}
}
