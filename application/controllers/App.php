<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
		$this->load->model('gejala_model');
	}

	public function login()
	{
		$this->layout->web_admin('auth/login');
	}

	public function index()
	{
		$this->layout->web_admin('admin/dashboard');
	}

	public function penyakit()
	{
		$this->layout->web_admin('admin/penyakit/index');
	}

	public function gejala()
	{
		$data['gejala']  = $this->gejala_model->index();
		$this->layout->web_admin('admin/gejala/index', $data);
	}

	public function solusi()
	{
		$this->layout->web_admin('admin/solusi/index');
	}

	public function laporan()
	{
		$this->layout->web_admin('admin/laporan/index');
	}

	public function users()
	{
		$this->layout->web_admin('admin/users/index');
	}

	public function settings()
	{
		$this->layout->web_admin('admin/settings/index');
	}

}
