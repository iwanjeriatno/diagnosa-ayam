<?php

class Diagnosis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->database();
		$this->load->model('gejala_model');
		$this->load->model('penyakit_model');
		$this->load->model('diagnosis_model');
		$this->load->library('dompdf_gen');

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


	// diagnosa-gejala
	public function diagnosa()
	{
			$init = 'G001';
			$data['gejala'] = $this->diagnosis_model->gejala($init);

			$this->load->view('pakar/layouts/header');
	    $this->load->view('pakar/layouts/sidebar');
	    $this->load->view('diagnosis/diagnosa', $data);
	    $this->load->view('pakar/layouts/footer');
	}

	// diagnosa
	public function diagnosa_gejala()
	{
		// last uri
		@$kode     = end($this->uri->segment_array());
		$id_user   = $this->session->userdata('id_user');

		$data['gejala'] 	= $this->diagnosis_model->gejala($kode);
		$data['penyakit']	= $this->diagnosis_model->penyakit($kode);
		$data['username']	= $this->diagnosis_model->username($id_user);

		$this->load->view('pakar/layouts/header');
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('diagnosis/diagnosa', $data);
		$this->load->view('pakar/layouts/footer');

	}

	// hasil
	public function hasil_diagnosa()
	{
		$data['path']     = 'Hasil Identifikasi Penyakit Ayam';

		$this->load->view('pakar/layouts/header');
		$this->load->view('pakar/layouts/sidebar');
		$this->load->view('diagnosis/hasil', $data);
		$this->load->view('pakar/layouts/footer');

		// validation
		$this->form_validation->set_rules('hasil_identifikasi','Hasil Identifikasi','required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('pakar/layouts/header', $data);
			$this->load->view('pakar/layouts/sidebar');
			$this->load->view('diagnosis/hasil', $data);
			$this->load->view('pakar/layouts/footer');
		} else {
			$this->diagnosis_model->store();
			redirect('diagnosis/laporan');
		}
	}
	// laporan
	public function laporan()
	{
		$user             = $this->session->userdata('id_user');
		$data['title']    = 'Cetak PDF Laporan';
		$data['laporan']  = $this->diagnosis_model->laporan($user);
		$data['username'] = $this->diagnosis_model->username($user);

		$this->load->view('diagnosis/laporan', $data);

		$paper_size  = 'A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		//Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
	}
}

?>
