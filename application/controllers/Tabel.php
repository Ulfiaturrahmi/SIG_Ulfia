<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database(); 
        $this->load->model('Puskesmas_model');
    }

    public function index() {
        $data['puskesmas'] = $this->Puskesmas_model->get_all_puskesmas();
        $this->load->view('layout/header');
        $this->load->view('tabeldata', $data);
        $this->load->view('layout/footer');
    }

    public function create() {
        $this->load->view('layout/header');
        $this->load->view('TambahDataPuskes');
        $this->load->view('layout/footer');
    }

    public function store() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude')
        );

        if (!empty($_FILES['foto']['tmp_name'])) {
            $data['foto'] = file_get_contents($_FILES['foto']['tmp_name']);
        }

        $this->Puskesmas_model->insert_puskesmas($data);
        redirect('tabel');
    }

    public function edit($id) {
        $data['puskesmas'] = $this->Puskesmas_model->get_puskesmas_by_id($id);
        $this->load->view('layout/header');
        $this->load->view('UbahDataPuskes', $data);
        $this->load->view('layout/footer');
    }

    public function update($id) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude')
        );

        if (!empty($_FILES['foto']['tmp_name'])) {
            $data['foto'] = file_get_contents($_FILES['foto']['tmp_name']);
        } else {
            unset($data['foto']); 
        }

        $this->Puskesmas_model->update_puskesmas($id, $data);
        redirect('tabel');
    }

    public function delete($id) {
        $this->Puskesmas_model->delete_puskesmas($id);
        redirect('tabel');
    }
}
?>