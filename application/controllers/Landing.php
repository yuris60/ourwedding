<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $nm_undangan = urldecode($this->uri->segment(2));
    if (empty($nm_undangan)) {
      $data['nm_undangan'] = "Tamu Undangan";
    } else {
      $data['nm_undangan'] = urldecode($nm_undangan);
    }

    $this->load->view('templates/header.php');
    $this->load->view('landing_page.php', $data);
    $this->load->view('templates/footer.php');
  }
}
