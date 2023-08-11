<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_informasi extends CI_Model
{
    // Info TA 1
    public function insert_data($data)
    {
        return $this->db->insert('tb_informasi_ta1', $data);
    }

    public function get_all_info()
    {
        return $this->db->get('tb_informasi_ta1')->result_array();
    }

    public function get_info_by_id($id)
    {
        return $this->db->get_where('tb_informasi_ta1', array('id' => $id))->row_array();
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_informasi_ta1', $data);
    }

    public function delete_data($id)
    {
        return $this->db->delete('tb_informasi_ta1', array('id' => $id));
    }

    // Info TA 2

    public function insert_data_ta2($data)
    {
        return $this->db->insert('tb_informasi_ta2', $data);
    }

    public function get_all_info_ta2()
    {
        return $this->db->get('tb_informasi_ta2')->result_array();
    }

    public function get_info_by_id_ta2($id)
    {
        return $this->db->get_where('tb_informasi_ta2', array('id' => $id))->row_array();
    }

    public function update_data_ta2($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_informasi_ta2', $data);
    }

    public function delete_data_ta2($id)
    {
        return $this->db->delete('tb_informasi_ta2', array('id' => $id));
    }

}