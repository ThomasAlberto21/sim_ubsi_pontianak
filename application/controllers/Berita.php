<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data = array(
            'record' => $this->Berita_model->read('berita'),
        );
        $data['judul'] = "Berita";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function insert_berita()
    {
        $config['upload_path'] = 'assets/images/berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $data = array(
                'nama_berita' => $this->input->post('nama_berita'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $gambar,
            );
            $this->db->insert('berita', $data);
            redirect('admin/berita/index', 'refresh');
        } else {
            redirect('admin/berita/tambah_berita', 'refresh');
        }
    }

    public function edit_berita($id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Edit Berita',
                'record' => $this->Berita_model->edit($id, 'berita')
            );
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/include/navbar', $data);
            $this->load->view('admin/berita/edit_berita', $data);
            $this->load->view('admin/include/footer', $data);
        } else {
            //  
        }
    }

    public function update_berita()
    {
        $config['upload_path'] = 'assets/images/berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $this->load->library('upload', $config);
        $id = $this->input->post('id_berita');
        $old_data = $this->Berita_model->get_berita_by_id($id);
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
        } else {
            $gambar = $old_data['gambar'];
        }
        $data = array(
            'nama_berita' => $this->input->post('nama_berita'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $gambar,
        );
        $this->Berita_model->update($id, $data, 'berita');
        redirect('admin/berita/index', 'refresh');
    }

    public function delete_berita($id = 0)
    {

        $this->Berita_model->delete($id, 'berita');
        redirect(base_url('admin/berita/index'));
    }
}
