<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('layout/footer');
    }
    public function dosbim()
    {
        $data['dosbim'] = $this->model_dosbim->getDosbim();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/dosbim', $data);
        $this->load->view('layout/footer');
    }
    public function insert()
    {
        $nama = $this->input->post('nama');
        $npp = $this->input->post('npp');
        $bidang = $this->input->post('bidang');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|svg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "File tidak dapat di upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'npp' => $npp,
            'bidang' => $bidang,
            'gambar' => $gambar
        );

        $this->model_dosbim->insert($data, 'tb_dosbim');
        $_SESSION["sukses"] = 'Dosbim berhasil di tambahkan';
        redirect('admin/dosbim');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $npp = $this->input->post('npp');
        $bidang = $this->input->post('bidang');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|svg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "File tidak dapat di upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama' => $nama,
            'npp' => $npp,
            'bidang' => $bidang,
            'gambar' => $gambar
        );

        $where = array(
            'id' => $id
        );

        $this->model_dosbim->update($where, $data, 'tb_dosbim');
        redirect('admin/dosbim');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['dosbim'] = $this->model_dosbim->edit($where, 'tb_dosbim')->result();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/dosbim', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->model_dosbim->delete($where, 'tb_dosbim');
        redirect('admin/dosbim');
    }
    public function pengumuman()
    {
        $data['pengumuman'] = $this->model_pengumuman->getPengumuman();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/pengumuman');
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
        redirect('admin/pengumuman');
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
        redirect('admin/pengumuman');
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
        redirect('admin/pengumuman');
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