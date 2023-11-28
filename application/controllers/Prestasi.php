<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prestasi_model');
    }
    public function index()
    {
        $data = array(
            'record' => $this->Prestasi_model->read('prestasi'),
        );
        $data['judul'] = "Prestasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('prestasi/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function insert_prestasi()
    {
        $config['upload_path'] = 'assets/images/prestasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $data = array(
                'nama_prestasi' => $this->input->post('nama_prestasi'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $gambar,
            );
            $this->db->insert('prestasi', $data);
            redirect('admin/prestasi/index', 'refresh');
        } else {
            redirect('admin/prestasi/tambah_prestasi', 'refresh');
        }
    }


    public function edit_prestasi($id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Edit Prestasi',
                'record' => $this->Prestasi_model->edit($id, 'prestasi')
            );
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/include/navbar', $data);
            $this->load->view('admin/prestasi/edit_prestasi', $data);
            $this->load->view('admin/include/footer', $data);
        } else {
            //  
        }
    }

    public function update_prestasi()
    {
        $config['upload_path'] = 'assets/images/prestasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $this->load->library('upload', $config);
        $id = $this->input->post('id_prestasi');
        $old_data = $this->Prestasi_model->get_prestasi_by_id($id);
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
        } else {
            $gambar = $old_data['gambar'];
        }
        $data = array(
            'nama_prestasi' => $this->input->post('nama_prestasi'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $gambar,
        );
        $this->Prestasi_model->update($id, $data, 'prestasi');
        redirect('admin/prestasi/index', 'refresh');
    }

    public function delete_prestasi($id = 0)
    {

        $this->Prestasi_model->delete($id, 'prestasi');
        redirect(base_url('admin/prestasi/index'));
    }

    public function detail($id)
    {
        $data = array(
            'record' => $this->Prestasi_model->baca_detail($id),
        );
        $data['judul'] = "Detail Prestasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('prestasi/v_prestasi', $data);
        $this->load->view('template/footer', $data);
    }
}
