<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('beranda');
        $this->load->view('template/footer');
    }
}
