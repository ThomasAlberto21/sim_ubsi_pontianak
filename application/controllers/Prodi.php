<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function akuntansi()
    {
        $data['judul'] = "Prodi | Akuntansi";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('prodi/akuntansi');
        $this->load->view('template/footer');
    }
    public function ilmukomputer()
    {
        $data['judul'] = "Prodi | Ilmu Komputer";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('prodi/ilmukomputer');
        $this->load->view('template/footer');
    }
    public function sisteminformasi()
    {
        $data['judul'] = "Prodi | Sistem Informasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('prodi/sisteminformasi');
        $this->load->view('template/footer');
    }
}
