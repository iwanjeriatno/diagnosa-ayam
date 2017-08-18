<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->view('welcome_message');

	}

	public function dashboard()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layouts/footer');
	}

	public function view($page = 'test')
	{
		$data['path'] = $page;

		if(!file_exists(APPPATH."views/".$page.'.php')) {
			show_404();
		}

		$this->load->view('layouts/header', $data);
		$this->load->view('/'.$page, $data);
		$this->load->view('layouts/footer');
	}
}
