<?php

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
	}

	public function index()
	{
		$data['laporan'] = $this->laporan_model->index();
		$data['path']   = 'Laporan';

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/laporan/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function show($no)
	{
		$data['laporan_item'] = $this->laporan_model->index($no);
		$data['path']        = 'Solusi';

		$this->load->view('layouts/header', $data);
		$this->load->view('news/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path']     = 'Pengguna';

		$this->form_validation->set_rules('username','Username','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/laporan/create', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->laporan_model->store();
			redirect('laporan');
		}
	}

	public function edit($id)
	{
		$data['path']  = 'Pengguna';
		$data['user_item'] = $this->laporan_model->show($id);

		$this->form_validation->set_rules('username','Username','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/laporan/edit', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->laporan_model->update($id);
			redirect('laporan');
		}
	}

	public function delete($id)
	{
		$this->laporan_model->destroy($id);
		redirect('laporan');
	}
}
