<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('home_model');
    $this->load->library('pagination');
  }

  public function index()
  {
    $nm_undangan = $this->uri->segment(2);
    if (empty($nm_undangan)) {
      $data['nm_undangan'] = "";
    } else {
      $data['nm_undangan'] = urldecode($nm_undangan);
    }
    //konfigurasi pagination
    $config['base_url'] = site_url('home/' . $nm_undangan . '/'); //site url
    $config['total_rows'] = $this->db->count_all('undangan_konfirmasi'); //total row
    $config['per_page'] = 5;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);
    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    //panggil function get_mahasiswa_list yang ada pada mmodel home_model. 
    $data['konfirmasi_undangan'] = $this->home_model->getUndanganKonfirmasiLimit($config["per_page"], $data['page']);

    $data['pagination'] = $this->pagination->create_links();


    // Nama Undangan
    // $data['nm_undangan'] = urldecode($this->uri->segment(2));
    // if (empty($data['nm_undangan'])) {
    //   $data['nm_undangan'] = "";
    // }

    // Panggil View
    $this->load->view('templates/header.php');
    $this->load->view('index.php', $data);
    $this->load->view('templates/footer.php');
  }
}
