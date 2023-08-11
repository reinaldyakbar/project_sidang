<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengumuman extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_pengumuman()
    {
        $query = $this->db->get('tb_pengumuman');
        return $query->result();
    }

    public function get_pengumuman_by_id($id)
    {
        $query = $this->db->get_where('tb_pengumuman', array('id' => $id));
        return $query->row();
    }

    public function insert($data)
    {
        return $this->db->insert('tb_pengumuman', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_pengumuman', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_pengumuman');
    }

    public function count_all_pengumuman()
    {
        return $this->db->count_all('tb_pengumuman');
    }
}