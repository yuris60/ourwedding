<?php

date_default_timezone_set('Asia/Jakarta');

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
    $this->db->order_by('id_konfirmasi', 'DESC');
    return $this->db->get('undangan_konfirmasi', $limit, $start)->result_array();
  }

  public function simpanUndangan()
  {
    $data = [
      'nm_undangan' => htmlspecialchars($this->input->post('nm_undangan', true)),
      'bersedia_hadir' => htmlspecialchars($this->input->post('bersedia_hadir', true)),
      'komentar' => $this->input->post('komentar', true),
      'tgl_komentar' => date('Y-m-d H:i:s'),
    ];

    $this->db->insert('undangan_konfirmasi', $data);
  }
}
