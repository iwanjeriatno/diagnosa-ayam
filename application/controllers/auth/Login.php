<?php

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	// login
	public function login()
	{
		die('sukses login');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role     = $this->input->post('role');

		$where = array(
			'username'  => $username,
 			'password'  => md5($password),
			'role'      => $role,
		);

		$cek = $this->login_modal->login("users", $where)->num_rows();

		if($cek > 0) {
				$data_session = array(
					'username' => $username,
					'role'		 => $role,
				);

				$this->session->set_userdata($data_session);

				redirect(base_url('pakar'));
		}
		else {
			redirect(base_url('login'));
		}
	}

	// logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

?>
