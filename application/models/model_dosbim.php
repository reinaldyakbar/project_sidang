<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_dosbim extends CI_Model
{

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update($data, $id, $table)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    public function get_dosbim($id = null)
    {
        if ($id !== null) {
            $query = $this->db->get_where('tb_dosbim', array('id' => $id));
            return $query->row();
        } else {
            $query = $this->db->get('tb_dosbim');
            return $query->result();
        }
    }
    public function get_dosbim_by_id($id)
    {
        return $this->db->get_where('tb_dosbim', array('id' => $id))->row();
    }

    public function update_dosbim($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_dosbim', $data);
    }
    public function delete_dosbim($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_dosbim');
    }
    public function countAllDosen()
    {
        return $this->db->count_all('tb_dosbim'); // Anda perlu sesuaikan dengan nama tabel yang Anda gunakan
    }

}