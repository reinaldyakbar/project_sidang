<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_auth extends CI_Model
{

    public function get_user($username, $password)
    {
        $query = $this->db->get_where('tb_admin', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

}