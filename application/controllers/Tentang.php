<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    public function sambutan()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('tentang/sambutan');
        $this->load->view('template/footer');
    }
    public function sejarah()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('tentang/sejarah');
        $this->load->view('template/footer');
    }
    public function visimisi()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('tentang/visi&misi');
        $this->load->view('template/footer');
    }
}
