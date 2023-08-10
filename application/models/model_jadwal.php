<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jadwal extends CI_Model
{

    // Model TA 1
    public function getTA1Jadwal()
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $query = $this->db->get('tb_jadwal_ta1');
        return $query->result_array();
    }
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get_jadwal_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_jadwal_ta1'); // Ganti dengan nama tabel yang sesuai
        return $query->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_jadwal_ta1', $data); // Ganti dengan nama tabel yang sesuai
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_jadwal_ta1'); // Ganti dengan nama tabel yang sesuai
    }


    // Model TA 2
    public function getTA2Jadwal()
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $query = $this->db->get('tb_jadwal_ta2');
        return $query->result_array();
    }
    public function insert_ta2($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get_jadwal_by_id_ta2($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_jadwal_ta2'); // Ganti dengan nama tabel yang sesuai
        return $query->row_array();
    }

    public function update_ta2($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_jadwal_ta2', $data); // Ganti dengan nama tabel yang sesuai
    }
    public function delete_ta2($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_jadwal_ta2'); // Ganti dengan nama tabel yang sesuai
    }

}