<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// authentication
		$isPengguna = array(
      'status' => 'login',
      'role'   => 'role',
    );
    if($this->session->userdata(!$isPengguna)) {
      redirect(site_url('login'));
    }

	}

	public function home()
	{
		$this->load->view('pakar/layouts/header');
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('home');
		$this->load->view('pakar/layouts/footer');
	}

}
