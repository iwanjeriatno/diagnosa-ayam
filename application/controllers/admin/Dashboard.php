
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function view($page = 'test')
	{
		$data['path'] = $page;
		if(!file_exists(APPPATH."views/".$page.'.php')) {
			show_404();
		}
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('admin/layouts/footer');
	}

}
