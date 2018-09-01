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

		$user = $this->login_model->show();

		foreach ($user as $item) {
			$id_user = $item->id_user;
		}

		$where = array(
			'username'  => $username,
 			'password'  => md5($password),
			'role'      => $role,
		);

		$cek = $this->login_model->login("users", $where)->num_rows();
		if($cek > 0) {
				$data_session = array(
					'id_user'  => $id_user,
					'username' => $username,
					'role'		 => $role,
					'status'   => 'login',
				);

				$session = $this->session->set_userdata($data_session);
		}
		else {
			redirect(site_url('login'));
		}

		if($this->session->userdata('role') == 'pakar') {
			redirect(site_url('dashboard'));
		}
		elseif($this->session->userdata('role') == 'pengguna') {
			redirect(site_url('home'));
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
