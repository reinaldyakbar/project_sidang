<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_dosbim extends CI_Model
{
    public function getDosbim()
    {
        $query = $this->db->get('tb_dosbim'); // Ganti "nama_table" dengan nama tabel yang Anda gunakan
        return $query->result();
    }

}