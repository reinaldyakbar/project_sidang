<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_pengumuman extends CI_Model
{
    public function getPengumuman()
    {
        $query = $this->db->get('tb_pengumuman'); // Ganti "nama_table" dengan nama tabel yang Anda gunakan
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