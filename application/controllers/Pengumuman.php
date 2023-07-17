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
        $no = $this->input->post('no');
        $judul = $this->input->post('judul');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $tanggal = date('Y-m-d');


        $data = array(
            'no' => $no,
            'judul' => $judul,
            'isi_pengumuman' => $isi_pengumuman,
            'tanggal' => $tanggal

        );

        $this->model_pengumuman->insert($data, 'tb_pengumuman');
        $_SESSION["sukses"] = 'pengumuman berhasil di tambahkan';
        redirect('pengumuman/index');
    }
    public function update_pengumuman()
    {
        $no = $this->input->post('no');
        $judul = $this->input->post('judul');
        $isi_pengumuman = $this->input->post('isi_pengumuman');
        $tanggal = date('Y-m-d');


        $data = array(
            'no' => $no,
            'npp' => $judul,
            'isi_pengumuman' => $isi_pengumuman,
            'tanggal' => $tanggal

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
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/add_pengumuman');
        $this->load->view('layout/footer');
    }
    public function isi_pengumuman()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/isi_pengumuman');
        $this->load->view('layout/footer');
    }
}