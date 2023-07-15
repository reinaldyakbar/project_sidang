<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/index');
        $this->load->view('layout/front-footer');
    }
    public function informasi()
    {
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/informasi');
        $this->load->view('layout/front-footer');
    }
    public function dosbim()
    {
        $data['dosbim'] = $this->model_dosbim->getDosbim();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/dosbim', $data);
        $this->load->view('layout/front-footer');
    }

    public function pengumuman()
    {
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/pengumuman');
        $this->load->view('layout/front-footer');
    }
    public function jadwal()
    {
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/jadwal');
        $this->load->view('layout/front-footer');
    }
    public function kontak()
    {
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/kontak');
        $this->load->view('layout/front-footer');
    }
}