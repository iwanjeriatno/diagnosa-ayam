<?php

class Diagnosis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->database();
		$this->load->model('gejala_model');
		$this->load->model('penyakit_model');

		// session username
		$pengguna = $this->session->userdata('username');

	}

  // penyakit
	public function penyakit()
	{
		$data['path']     = 'Diagnosa';
    $data['diagnosa'] = 'Penyakit';

		$data['penyakit'] = $this->penyakit_model->index();

		$this->load->view('pakar/layouts/header');
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('diagnosis/cek-penyakit', $data);
		$this->load->view('pakar/layouts/footer');
	}

  // cek penyakit
  public function cekPenyakit()
  {
    $kd_penyakit = $this->input->post('kd_penyakit');

    if(isset($kd_penyakit)) {
      // set sesion penyakit
      $this->session->set_userdata('kd_penyakit', $kd_penyakit);
      redirect('diagnosis/gejala/kode=', $data);
    }
    else {
      $penyakit = '';
    }
  }

  // gejala
  public function gejala()
  {
    // get session penyakit
    $penyakit   = $this->session->userdata('kd_penyakit');

    $data['path']     = 'Diagnosa';
    $data['diagnosa'] = 'Gejala';
    $data['gejala']   = $this->gejala_model->index();

    $this->load->view('pakar/layouts/header');
    $this->load->view('pakar/layouts/sidebar');
    $this->load->view('diagnosis/cek-gejala', $data);
    $this->load->view('pakar/layouts/footer');
  }

  // cek gejala
  public function cekGejala()
  {
    $jml_gejala = $this->input->post('jml_gejala');

    // get session penyakit
    $penyakit   = $this->session->userdata('kd_penyakit');

    for($i=1; $i <= $jml_gejala; $i++) {
      $kd_gejala  = $this->input->post('kd_penyakit'.$i);

      if(isset($kd_gejala)) {

      }
      else {
        $kd_gejala = "";
      }

      if(!empty($kd_gejala)) {

      }
    }
  }

	// diagnosa
	public function diagnosa()
	{
			// last uri
			@$kode     = end($this->uri->segment_array());
die($kode);
			if($kode == "") {
				$kode = "";
				$data['gejala'] = $this->diagnosis_model->gejala($kode);

				$this->load->view('pakar/layouts/header');
		    $this->load->view('pakar/layouts/sidebar');
		    $this->load->view('diagnosis/cek-gejala', $data);
		    $this->load->view('pakar/layouts/footer');

			}
	}

}

?>
