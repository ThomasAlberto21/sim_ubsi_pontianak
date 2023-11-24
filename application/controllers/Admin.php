<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/auth_header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/index');
        $this->load->view('template/auth_footer');
    }

    public function kegiatan()
    {
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/kegiatan');
        $this->load->view('auth/admin/include/footer');
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
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/berita');
        $this->load->view('auth/admin/include/footer');
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
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/prestasi');
        $this->load->view('auth/admin/include/footer');
    }
    public function tambah_prestasi()
    {
        $this->load->view('auth/admin/include/header');
        $this->load->view('auth/admin/include/navbar');
        $this->load->view('auth/admin/tambah_prestasi');
        $this->load->view('auth/admin/include/footer');
    }
}
