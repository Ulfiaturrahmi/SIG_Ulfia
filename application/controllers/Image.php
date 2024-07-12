<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function foto($id) {
        $this->db->select('foto');
        $this->db->from('puskesmas');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $row = $query->row();

        if (!empty($row->foto)) {
            header("Content-type: image/jpeg"); // atau image/png sesuai dengan format foto
            echo $row->foto;
        } else {
            show_404(); // Tampilkan error 404 jika gambar tidak ditemukan
        }
    }
}
?>