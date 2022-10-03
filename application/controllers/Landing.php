<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index($nama_undangan)
  {
    $data['nama_undangan'] = urldecode($this->uri->segment(2));

    $this->load->view('templates/header.php');
    $this->load->view('landing_page.php', $data);
    $this->load->view('templates/footer.php');
  }
}
