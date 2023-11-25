<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->view('template/auth_header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/index');
        $this->load->view('template/auth_footer');
    }

    public function kegiatan()
    {
        $data = array(
            'record' => $this->Kegiatan_model->read('kegiatan'),
        );
        $this->load->view('auth/admin/include/header', $data);
        $this->load->view('auth/admin/include/navbar', $data);
        $this->load->view('auth/admin/kegiatan', $data);
        $this->load->view('auth/admin/include/footer', $data);
    }
    public function tambah_kegiatan()
    {
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/tambah_kegiatan');
        $this->load->view('auth/admin/include/footer');
    }

    public function berita()
    {
        $data = array(
            'record' => $this->Berita_model->read('berita'),
        );
        $this->load->view('auth/admin/include/header', $data);
        $this->load->view('auth/admin/include/navbar', $data);
        $this->load->view('auth/admin/berita', $data);
        $this->load->view('auth/admin/include/footer', $data);
    }
    public function tambah_berita()
    {
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/tambah_berita');
        $this->load->view('auth/admin/include/footer');
    }

    public function prestasi()
    {
        $data = array(
            'record' => $this->Prestasi_model->read('prestasi'),
        );
        $this->load->view('auth/admin/include/header', $data);
        $this->load->view('auth/admin/include/navbar', $data);
        $this->load->view('auth/admin/prestasi', $data);
        $this->load->view('auth/admin/include/footer', $data);
    }
    public function tambah_prestasi()
    {
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/tambah_prestasi');
        $this->load->view('auth/admin/include/footer');
    }
}
