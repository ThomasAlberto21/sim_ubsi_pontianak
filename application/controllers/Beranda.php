<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Beranda";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('beranda');
        $this->load->view('template/footer');
    }
}
