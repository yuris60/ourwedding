<?php

class Home_model extends CI_Model
{

  public function getUndangan($nm_undangan)
  {
    $nm_undangan = urldecode($this->uri->segment(2));
    $this->db->where('nm_undangan', $nm_undangan);
    return $this->db->get('undangan')->row_array();
  }

  //ambil data mahasiswa dari database
  function getUndanganKonfirmasiLimit($limit, $start)
  {
    $this->db->join('undangan', 'undangan.id_undangan = undangan_konfirmasi.id_undangan');
    return $this->db->get('undangan_konfirmasi', $limit, $start)->result_array();
  }
}
