<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_jadwal');
    }

    public function index()
    {
        $data['ta1_jadwal'] = $this->model_jadwal->getTA1Jadwal();
        $data['ta2_jadwal'] = $this->model_jadwal->getTA2Jadwal();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/jadwal', $data);
        $this->load->view('layout/footer');
    }

    public function tambah_jadwalTA1()
    {
        $this->load->view('tambah_jadwal_view');
    }

    public function simpan_jadwalTA1()
    {
        $data = array(
            'gelombang' => $this->input->post('gelombang'),
            'pendaftaran' => $this->input->post('pendaftaran'),
            'estimasi_sidang' => $this->input->post('estimasi_sidang')
        );

        $this->model_jadwal->simpanJadwalTA1($data);

        // Redirect ke halaman utama setelah data berhasil disimpan
        redirect('jadwal/index');
    }

    public function edit_jadwalTA1()
    {
        $id = $this->input->post('edit_jadwal_id');
        $data = array(
            'gelombang' => $this->input->post('edit_gelombang'),
            'pendaftaran' => $this->input->post('edit_pendaftaran'),
            'estimasi_sidang' => $this->input->post('edit_estimasi_sidang')
        );

        $this->model_jadwal->editJadwalTA1($id, $data);

        redirect('jadwal/index');
    }

    public function hapus_jadwalTA1()
    {
        $id = $this->input->post('hapus_jadwal_id');

        $this->model_jadwal->hapusJadwalTA1($id);

        redirect('jadwal/index');
    }

}