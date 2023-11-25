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
            // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Berhasil</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/prestasi', 'refresh');
        } else {
            // $this->session->set_flashdata('message', 'swal("Gagal", "Galeri Gagal Di Tambah Kan", "error");');
            redirect('admin/tambah_prestasi', 'refresh');
        }
    }

    public function delete_prestasi($id = 0)
    {

        $this->Prestasi_model->delete($id, 'prestasi');
        // $this->session->set_flashdata('message', 'swal("Berhasil", "Data Berhasil Di Hapus", "success");');
        redirect(base_url('admin/prestasi'));
    }
}
