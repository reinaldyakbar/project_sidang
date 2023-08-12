<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['dosbim'] = $this->model_dosbim->get_dosbim();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/index', $data);
        $this->load->view('layout/front-footer');
    }
    public function info_ta1()
    {
        $data['info_ta1'] = $this->model_informasi->get_all_info();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/info_ta1', $data);
        $this->load->view('layout/front-footer');
    }
    public function info_ta2()
    {
        $data['info_ta2'] = $this->model_informasi->get_all_info_TA2();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/info_ta2', $data);
        $this->load->view('layout/front-footer');
    }
    public function dosbim()
    {
        $data['dosbim'] = $this->model_dosbim->get_dosbim();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/dosbim', $data);
        $this->load->view('layout/front-footer');
    }

    public function pengumuman()
    {
        $data['pengumuman'] = $this->model_pengumuman->get_all_pengumuman();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/pengumuman', $data);
        $this->load->view('layout/front-footer');
    }
    public function isi_pengumuman($id = null)
    {
        $data['pengumuman'] = $this->model_pengumuman->get_all_pengumuman();

        // Jika $id tidak diberikan, ambil ID pertama dari pengumuman
        if ($id === null && isset($data['pengumuman'][0])) {
            $data['id_pengumuman'] = $data['pengumuman'][0]->id;
        } else {
            $data['id_pengumuman'] = $id;
        }

        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/isi_pengumuman', $data);
        $this->load->view('layout/front-footer');
    }

    public function jadwal()
    {
        $data['ta1_jadwal'] = $this->model_jadwal->getTA1Jadwal();
        $data['ta2_jadwal'] = $this->model_jadwal->getTA2Jadwal();
        $this->load->view('layout/front-header');
        $this->load->view('layout/front-navbar');
        $this->load->view('front-end/jadwal', $data);
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
