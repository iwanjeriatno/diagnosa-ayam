<?php

class Rule extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rule_model');
	}

	public function index()
	{
		$data['path']     = 'Base Pengetahuan';

		$data['rule']    = $this->rule_model->index();
		$data['rule1']   = $this->rule_model->rule('P0');
		$data['total']   = $this->rule_model->total_rule('P0');
		$data['initial'] = $this->rule_model->initial('P013');

		$this->load->view('pakar/layouts/header');
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('pakar/rule/index', $data);
		$this->load->view('pakar/layouts/footer');
	}

	public function show($no)
	{
	}

	public function create()
	{
		$data['path']            = 'Basis Pengetahuan';
		$data['penyakit_gejala'] = $this->rule_model->penyakit_gejala();
		$data['gejala']          = $this->rule_model->gejala();
		$data['penyakit']        = $this->rule_model->penyakit();

		// validation
		$this->form_validation->set_rules('kd_gejala','Kode Penyakit Gejala','required');
		$this->form_validation->set_rules('jika_ya','Jika Ya','required');
		$this->form_validation->set_rules('jika_tidak','Jika Tidak','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('pakar/rule/create', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->rule_model->store();
			redirect('rule');
		}
	}

	public function edit($id)
	{
	}

	public function delete($id)
	{
		$this->rule_model->destroy($id);
		redirect('rule');
	}
}

?>
