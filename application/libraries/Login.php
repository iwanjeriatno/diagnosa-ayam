<?php

/**
 * System Login
 */
class Login
{
  protected $_ci;

  function __construct()
  {
    $this->_ci = &get_instance();
    $this->load->library('session');
  }

  public function auth($role = '') {
    $isPakar = array(
      'status' => 'login',
      'role'   => $role,
    );
    if($this->session->userdata(!$isPakar)) {
      redirect(site_url('login'));
    }
  }

  function clear_cache()
  {
      $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
      $this->output->set_header("Pragma: no-cache");
  }


}
