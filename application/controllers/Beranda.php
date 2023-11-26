<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Kegiatan_model');
        $this->load->model('Prestasi_model');
    }
    public function index()
    {
        // $data['kegiatan'] = 
        $data['judul'] = "Beranda";
        $data = array(
            'berita' => $this->Berita_model->read('berita'),
            'prestasi' => $this->Prestasi_model->read('prestasi'),
            'kegiatan' => $this->Kegiatan_model->limitkegiatan(1)
        );
        // die(print_r($data['prestasi']));
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('beranda', $data);
        $this->load->view('template/footer', $data);
    }
}
