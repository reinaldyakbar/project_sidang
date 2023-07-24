<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_informasi extends CI_Model
{
    public function getInfoTA1()
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $query = $this->db->get('tb_informasi_ta1');
        return $query->result_array();
    }

    public function insert_data($data)
    {
        // Replace 'your_table_name' with the name of the table where you want to store the data
        return $this->db->insert('tb_informasi_ta1', $data);
    }
    public function getInfoTA2()
    {
        // Ganti 'ta1_jadwal' dengan tabel yang sesuai untuk TA-1
        $query = $this->db->get('tb_informasi_ta2');
        return $query->result_array();
    }

    public function insert_dataTA2($data)
    {
        // Replace 'your_table_name' with the name of the table where you want to store the data
        return $this->db->insert('tb_informasi_ta2', $data);
    }
}