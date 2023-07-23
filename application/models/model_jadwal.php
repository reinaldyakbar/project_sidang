<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jadwal extends CI_Model
{

    public function getTA1Jadwal()
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $query = $this->db->get('tb_jadwal_ta1');
        return $query->result_array();
    }

    public function simpanJadwalTA1($data)
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $this->db->insert('tb_jadwal_ta1', $data);
    }

    public function editJadwalTA1($id, $data)
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $this->db->where('id', $id);
        $this->db->update('tb_jadwal_ta1', $data);
    }

    public function hapusJadwalTA1($id)
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $this->db->where('id', $id);
        $this->db->delete('tb_jadwal_ta1');
    }
    public function getTA2Jadwal()
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $query = $this->db->get('tb_jadwal_ta2');
        return $query->result_array();
    }

    public function simpanJadwalTA2($data)
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $this->db->insert('tb_jadwal_ta2', $data);
    }

    public function editJadwalTA2($id, $data)
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $this->db->where('id', $id);
        $this->db->update('tb_jadwal_ta2', $data);
    }

    public function hapusJadwalTA2($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}