<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    public function sambutan()
    {
        $data['judul'] = "Tentang | Sambutan Rektor";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('tentang/sambutan');
        $this->load->view('template/footer');
    }
    public function sejarah()
    {
        $data['judul'] = "Tentang | Sejarah";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('tentang/sejarah');
        $this->load->view('template/footer');
    }
    public function visimisi()
    {
        $data['judul'] = "Tentang | Visi & Misi";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('tentang/visi&misi');
        $this->load->view('template/footer');
    }
}
