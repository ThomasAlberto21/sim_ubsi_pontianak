<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi_model extends CI_Model
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
        $this->db->order_by('id_prestasi', 'DESC');

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
        $this->db->where('id_prestasi', $id);
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
        $this->db->where('id_prestasi', $id);
        $this->db->update($table, $data);
    }
    public function delete($id, $table)
    {
        $this->db->where('id_prestasi', $id);
        $this->db->delete($table);
    }

    public function total_rows($table)
    {
        return $this->db->count_all_results($table);
    }
    public function get_prestasi_by_id($id)
    {
        return $this->db->get_where('prestasi', ['id_prestasi' => $id])->row_array();
    }
}
