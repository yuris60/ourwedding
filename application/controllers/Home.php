<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index($nama_undangan)
  {
    $data['nama_undangan'] = urldecode($this->uri->segment(2));

    $this->load->view('templates/header.php');
    $this->load->view('index.php', $data);
    $this->load->view('templates/footer.php');
  }
}
