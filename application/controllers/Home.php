<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('penyakit_model');
		$this->load->model('gejala_model');
		$this->load->model('solusi_model');
	}

	public function dashboard()
	{
		$data['total_penyakit'] = $this->penyakit_model->total_penyakit();
		$data['total_gejala']   = $this->gejala_model->total_gejala();
		$data['total_solusi']   = $this->solusi_model->total_solusi();

		$this->load->view('pakar/layouts/header');
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/dashboard', $data);
		$this->load->view('pakar/layouts/footer');
	}

	// public function view($page = 'test')
	// {
	// 	$data['path'] = $page;
	//
	// 	if(!file_exists(APPPATH."views/".$page.'.php')) {
	// 		show_404();
	// 	}
	//
	// 	$this->load->view('pakar/layouts/header');
	// 	$this->load->view('pakar/layouts/sidebar');
	// 	$this->load->view('/'.$page, $data);
	// 	$this->load->view('pakar/layouts/footer');
	// }
}
