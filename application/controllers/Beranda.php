<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Puskesmas_model');
    }

    public function index() {
        $data['puskesmas'] = $this->Puskesmas_model->get_all_puskesmas();
        $this->load->view('layout/header');
        $this->load->view('index', $data);
        $this->load->view('layout/footer');
    }
}

?>