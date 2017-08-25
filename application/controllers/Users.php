<?php

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		$data['users'] = $this->users_model->index();
		$data['path']   = 'Pengguna';

		$this->load->view('pakar/layouts/header', $data);
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/users/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function show($no)
	{
		$data['users_item'] = $this->users_model->index($no);
		$data['path']        = 'Solusi';

		$this->load->view('layouts/header', $data);
		$this->load->view('news/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path']     = 'Pengguna';

		$this->form_validation->set_rules('username','Username','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/users/create', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->users_model->store();
			redirect('users');
		}
	}

	public function edit($id)
	{
		$data['path']  = 'Pengguna';
		$data['user_item'] = $this->users_model->show($id);

		$this->form_validation->set_rules('username','Username','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/users/edit', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->users_model->update($id);
			redirect('users');
		}
	}

	public function delete($id)
	{
		$this->users_model->destroy($id);
		redirect('users');
	}
}
