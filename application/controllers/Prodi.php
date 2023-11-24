<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function akuntansi()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('prodi/akuntansi');
        $this->load->view('template/footer');
    }
    public function ilmukomputer()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('prodi/ilmukomputer');
        $this->load->view('template/footer');
    }
    public function sisteminformasi()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('prodi/sisteminformasi');
        $this->load->view('template/footer');
    }
}
