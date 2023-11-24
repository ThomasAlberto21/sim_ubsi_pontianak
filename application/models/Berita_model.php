<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function read($table)
    {
        $this->db->from($table);
        $this->db->order_by('id_berita', 'DESC');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }

            $query->free_result();
        } else {
            $data = NULL;
        }

        return $data;
    }
    public function edit($id, $table)
    {
        $this->db->where('ID', $id);
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $query->free_result();
        } else {
            $data = NULL;
        }

        return $data;
    }

    public function update($id, $data, $table)
    {
        $this->db->where('ID', $id);
        $this->db->update($table, $data);
    }
    public function delete($id, $table)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete($table);
    }

    public function total_rows($table)
    {
        return $this->db->count_all_results($table);
    }
}
