<?php
defined('BASEPATH') or exit('Akses skrip langsung tidak diizinkan');

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
    public function insert()
    {
        $gelombang = $this->input->post('gelombang');
        $pendaftaran = $this->input->post('pendaftaran');
        $estimasi_sidang = $this->input->post('estimasi_sidang');

        $data = array(
            'gelombang' => $gelombang,
            'pendaftaran' => $pendaftaran,
            'estimasi_sidang' => $estimasi_sidang,
        );

        $this->model_jadwal->insert($data, 'tb_jadwal_ta1');
        $_SESSION["sukses"] = 'Jadwal berhasil di tambahkan';
        redirect('jadwal/index');
    }
    public function edit($id)
    {
        $data['id'] = $id;
        $data['jadwal'] = $this->model_jadwal->get_jadwal_by_id($id); // Ubah sesuai dengan nama model dan method Anda
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/edit_jadwal_ta1', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $gelombang = $this->input->post('gelombang');
        $pendaftaran = $this->input->post('pendaftaran');
        $estimasi_sidang = $this->input->post('estimasi_sidang');

        $data = array(
            'gelombang' => $gelombang,
            'pendaftaran' => $pendaftaran,
            'estimasi_sidang' => $estimasi_sidang
        );

        $this->model_jadwal->update($id, $data);

        $this->session->set_flashdata('success_message', 'Data berhasil diperbarui.');
        redirect('jadwal/index');
    }

    public function delete($id)
    {
        $this->model_jadwal->delete($id);

        $this->session->set_flashdata('success_message', 'Data berhasil dihapus.');
        redirect('jadwal/index');
    }
    public function insert_ta2()
    {
        $gelombang = $this->input->post('gelombang');
        $pendaftaran = $this->input->post('pendaftaran');
        $waktu_sidang = $this->input->post('waktu_sidang');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'gelombang' => $gelombang,
            'pendaftaran' => $pendaftaran,
            'waktu_sidang' => $waktu_sidang,
            'keterangan' => $keterangan
        );

        $this->model_jadwal->insert_ta2($data, 'tb_jadwal_ta2');
        $_SESSION["sukses"] = 'Jadwal berhasil di tambahkan';
        redirect('jadwal/index');
    }
    public function edit_ta2($id)
    {
        $data['id'] = $id;
        $data['jadwal'] = $this->model_jadwal->get_jadwal_by_id_ta2($id); // Ubah sesuai dengan nama model dan method Anda
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/edit_jadwal_ta2', $data);
        $this->load->view('layout/footer');
    }

    public function update_ta2()
    {
        $id = $this->input->post('id');
        $gelombang = $this->input->post('gelombang');
        $pendaftaran = $this->input->post('pendaftaran');
        $waktu_sidang = $this->input->post('waktu_sidang');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'gelombang' => $gelombang,
            'pendaftaran' => $pendaftaran,
            'waktu_sidang' => $waktu_sidang,
            'keterangan' => $keterangan
        );

        $this->model_jadwal->update_ta2($id, $data);

        $this->session->set_flashdata('success_message', 'Data berhasil diperbarui.');
        redirect('jadwal/index');
    }

    public function delete_ta2($id)
    {
        $this->model_jadwal->delete_ta2($id);

        $this->session->set_flashdata('success_message', 'Data berhasil dihapus.');
        redirect('jadwal/index');
    }

}