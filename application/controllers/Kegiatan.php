<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }
    public function index()
    {
        $data = array(
            'record' => $this->Kegiatan_model->read('kegiatan'),
        );
        $data['judul'] = "Kegiatan";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('kegiatan/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function insert_kegiatan()
    {
        $config['upload_path'] = 'assets/images/kegiatan/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $gambar,
            );
            $this->db->insert('kegiatan', $data);
            redirect('admin/kegiatan/index', 'refresh');
        } else {
            redirect('admin/kegiatan/tambah_kegiatan', 'refresh');
        }
    }


    public function edit_kegiatan($id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Edit Kegiatan',
                'record' => $this->Kegiatan_model->edit($id, 'kegiatan')
            );
            $this->load->view('admin/include/header', $data);
            $this->load->view('admin/include/navbar', $data);
            $this->load->view('admin/kegiatan/edit_kegiatan', $data);
            $this->load->view('admin/include/footer', $data);
        } else {
            //  
        }
    }

    public function update_kegiatan()
    {
        $config['upload_path'] = 'assets/images/kegiatan/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $this->load->library('upload', $config);
        $id = $this->input->post('id_kegiatan');
        $old_data = $this->Kegiatan_model->get_kegiatan_by_id($id);
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
        } else {
            $gambar = $old_data['gambar'];
        }
        $data = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $gambar,
        );
        $this->Kegiatan_model->update($id, $data, 'kegiatan');
        redirect('admin/kegiatan/index', 'refresh');
    }

    public function delete_kegiatan($id = 0)
    {

        $this->Kegiatan_model->delete($id, 'kegiatan');
        redirect(base_url('admin/kegiatan/index'));
    }
}
