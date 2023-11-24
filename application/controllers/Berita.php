<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
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
            // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Berhasil</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/berita', 'refresh');
        } else {
            // $this->session->set_flashdata('message', 'swal("Gagal", "Galeri Gagal Di Tambah Kan", "error");');
            redirect('admin/berita', 'refresh');
        }
    }

    public function delete_berita($id = 0)
    {

        $this->Berita_model->delete($id, 'berita');
        // $this->session->set_flashdata('message', 'swal("Berhasil", "Data Berhasil Di Hapus", "success");');
        redirect(base_url('admin/berita'));
    }
}
