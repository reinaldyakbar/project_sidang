<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('admin');
        $this->load->view('layout/footer');
    }
}