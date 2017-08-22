<?php

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('session');

	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	// login
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role     = $this->input->post('role');

		$where = array(
			'username'  => $username,
 			'password'  => md5($password),
			'role'      => $role,
		);

		$cek = $this->login_model->login("users", $where)->num_rows();
		if($cek > 0) {
				$data_session = array(
					'username' => $username,
					'role'		 => $role,
					'status'   => 'login',
				);

				$this->session->set_userdata($data_session);

				redirect(site_url('pakar'));
		}
		else {
			redirect(site_url('login'));
		}
	}

	// logout
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('__ci_last_regenerate');
		redirect(site_url('login'));
	}

}

?>
