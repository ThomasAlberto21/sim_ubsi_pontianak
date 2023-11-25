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
            // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Berhasil</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/kegiatan', 'refresh');
        } else {
            // $this->session->set_flashdata('message', 'swal("Gagal", "Galeri Gagal Di Tambah Kan", "error");');
            redirect('admin/tambah_kegiatan', 'refresh');
        }
    }

    public function delete_kegiatan($id = 0)
    {

        $this->Kegiatan_model->delete($id, 'kegiatan');
        // $this->session->set_flashdata('message', 'swal("Berhasil", "Data Berhasil Di Hapus", "success");');
        redirect(base_url('admin/kegiatan'));
    }
}
