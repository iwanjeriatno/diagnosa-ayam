<?php

class Gejala extends CI_Controller {

	public function __construct()
	{
		$this->load->library('layout');
		$this->load->model('gejala_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['gejala']  = $this->gejala_model->index();
		$this->layout->web_admin('admin/gejala/index', $data);
	}

	public function show($slug)
	{
		$data['news_item'] = $this->news_model->index($slug);
		$data['path'] = 'News';
		$this->load->view('layouts/header', $data);
		$this->load->view('news/details', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['path'] = 'News';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('text','Text','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/header', $data);
			$this->load->view('news/create');
			$this->load->view('layouts/footer');
		} else {
			$this->news_model->store();
			redirect('news');
		}
	}

	public function edit($id)
	{
		$data['path'] = 'News';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('text','Text','required');
		if($this->form_validation->run() == FALSE) {
			$data['news_item'] = $this->news_model->show($id);
			$this->load->view('layouts/header', $data);
			$this->load->view('news/edit', $data);
			$this->load->view('layouts/footer');
		} else {
			$this->news_model->update($id);
			redirect('news');
		}
	}

	public function delete($id)
	{
		$this->news_model->destroy($id);
		redirect('news');
	}
}
