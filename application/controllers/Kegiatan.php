<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Kegiatan";
        $this->load->view( 'template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('kegiatan/index');
        $this->load->view('template/footer');
    }
}
