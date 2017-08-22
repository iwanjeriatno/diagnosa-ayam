<?php

class Base_Pengetahuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_pengetahuan_model');
	}

	public function index()
	{
		$data['path']     = 'Base Pengetahuan';

		$data['penyakit'] = $this->base_pengetahuan_model->index();

		$this->load->view('pakar/base_pengetahuan/layouts/header');
		$this->load->view('pakar/base_pengetahuan/layouts/sidebar');
		$this->load->view('pakar/base_pengetahuan/index', $data);
		$this->load->view('pakar/base_pengetahuan/layouts/footer');
	}

	public function show($no)
	{
	}

	public function create()
	{
	}

	public function edit($id)
	{
	}

	public function delete($id)
	{
	}
}

?>
