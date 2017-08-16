<?php

/**
 * Template
 */
class Layout
{
  protected $_ci;

  function __construct()
  {
    $this->_ci = &get_instance();
  }

  public function web_admin($content, $data = NULL) {
    $data['header']  = $this->_ci->load->view('admin/layouts/header', $data, TRUE);
    $data['sidebar'] = $this->_ci->load->view('admin/layouts/sidebar', $data, TRUE);
    $data['content'] = $this->_ci->load->view($content, $data, TRUE);
    $data['footer']  = $this->_ci->load->view('admin/layouts/footer', $data, TRUE);

    $this->_ci->load->view('admin/layouts/app', $data);
  }


}
