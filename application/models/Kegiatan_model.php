<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
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
        $this->db->order_by('id_kegiatan', 'DESC');

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
        $this->db->where('id_kegiatan', $id);
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
        $this->db->where('id_kegiatan', $id);
        $this->db->update($table, $data);
    }
    public function delete($id, $table)
    {
        $this->db->where('id_kegiatan', $id);
        $this->db->delete($table);
    }

    public function total_rows($table)
    {
        return $this->db->count_all_results($table);
    }
    public function get_kegiatan_by_id($id)
    {
        return $this->db->get_where('kegiatan', ['id_kegiatan' => $id])->row_array();
    }
    public function limitkegiatan($limit)
    {
        $query = "SELECT * 
                FROM kegiatan
              ORDER BY id_kegiatan DESC LIMIT $limit
    ";
        return $this->db->query($query)->result_array();
    }
}
