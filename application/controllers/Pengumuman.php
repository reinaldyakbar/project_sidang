<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function index()
    {
        $data['pengumuman'] = $this->model_pengumuman->getPengumuman();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('layout/footer');
    }
    public function add_pengumuman()
    {
        $id = $this->input->post('id'); // Ambil nilai id dari input form
        $judul = $this->input->post('judul');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $koordinator = $this->input->post('koordinator');
        $tanggal = date('d, F Y', strtotime($this->input->post('tanggal'))); // Ubah format tanggal menjadi "12, September 2023"

        $data = array(
            'id' => $id,
            'judul' => $judul,
            'isi_pengumuman' => $isi_pengumuman,
            'koordinator' => $koordinator,
            'tanggal' => $tanggal
        );

        $where = array(
            'id' => $id
        );

        $this->model_pengumuman->insert($data, 'tb_pengumuman');
        $_SESSION["sukses"] = 'pengumuman berhasil ditambahkan';
        redirect('pengumuman/index');
    }

    public function update_pengumuman()
    {
        $id = $this->input->post('id'); // Ambil nilai id dari input form
        $judul = $this->input->post('judul');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $koordinator = $this->input->post('koordinator');
        $tanggal = date('d, F Y', strtotime($this->input->post('tanggal'))); // Ubah format tanggal menjadi "12, September 2023"

        $data = array(
            'id' => $id,
            'judul' => $judul,
            'isi_pengumuman' => $isi_pengumuman,
            'koordinator' => $koordinator,
            'tanggal' => $tanggal
        );

        $where = array(
            'id' => $id
        );

        $where = array(
            'id' => $id
        );

        $this->model_pengumuman->update($where, $data, 'tb_pengumuman');
        redirect('pengumuman/index');
    }

    public function edit_pengumuman($id)
    {
        $where = array('id' => $id);
        $data['pengumuman'] = $this->model_pengumuman->edit($where, 'tb_pengumuman')->result();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('layout/footer');
    }
    public function delete_pengumuman($id)
    {
        $where = array('id' => $id);
        $this->model_pengumuman->delete($where, 'tb_pengumuman');
        redirect('pengumuman/index');
    }
    public function tambah_pengumuman()
    {
        $data['pengumuman'] = $this->model_pengumuman->getPengumuman();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/add_pengumuman', $data);
        $this->load->view('layout/footer');
    }
    public function isi_pengumuman($id = null)
    {
        $data['pengumuman'] = $this->model_pengumuman->getPengumuman();
        $data['id_pengumuman'] = $id; // Menyimpan nilai ID pengumuman dalam variabel $id_pengumuman

        // Jika $id tidak diberikan, ambil ID pertama dari pengumuman
        if ($id === null && isset($data['pengumuman'][0])) {
            $data['id_pengumuman'] = $data['pengumuman'][0]->id;
        }

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/isi_pengumuman', $data);
        $this->load->view('layout/footer');
    }


}