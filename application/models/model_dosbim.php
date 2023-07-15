<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_dosbim extends CI_Model
{
    public function getDosbim()
    {
        $query = $this->db->get('tb_dosbim'); // Ganti "nama_table" dengan nama tabel yang Anda gunakan
        return $query->result();
    }
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}