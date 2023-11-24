<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Prestasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('prestasi/index');
        $this->load->view('template/footer');

    }
}
