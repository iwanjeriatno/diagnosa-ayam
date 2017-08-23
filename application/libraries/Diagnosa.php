<?php

/**
 * Diagnosa
 */
class Diagnosa extends CI_Controller
{
  public function __construct()
  {
    $this->load->library('database');
  }

  public function jika_ya($kode)
  {
    $pertanyaan = $thisl->gejala($kode);
  }

  public function gejala($kode)
  {
    $query = $this->db->select('a.id as kode, a.*, b.nama_gejala')
                      ->from('rule a')
                      ->join('gejala b', 'b.kd_gejala = a.kd_gejala', 'left')
                      ->where('a.kd_gejala', $kode)
                      ->get();

    return $query->row();
  }
}
