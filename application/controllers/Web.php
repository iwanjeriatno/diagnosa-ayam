<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
	}

	public function login()
	{
			$this->load->view('auth/login');
	}

	// ==========================================================================
	// admin
	// ==========================================================================

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/layouts/footer');
	}

	public function penyakit()
	{
		$data['title'] = "Data Penyakit";
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/penyakit/index');
		$this->load->view('admin/layouts/footer');
	}

	public function gejala()
	{
		$data['title'] = "Data Gejala";
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/gejala/index');
		$this->load->view('admin/layouts/footer');
	}


}
