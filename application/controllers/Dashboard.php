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
    public function create()
    {
        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npp', 'NPP', 'required');
        $this->form_validation->set_rules('bidang', 'Bidang Kajian', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form create dosen
            $this->load->view('create_dosen');
        } else {
            // Jika validasi sukses, simpan data ke database
            $data = array(
                'nama' => $this->input->post('nama'),
                'npp' => $this->input->post('npp'),
                'bidang' => $this->input->post('bidang')
            );

            // Konfigurasi upload gambar
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
            $config['encrypt_name'] = TRUE; // Enkripsi nama file

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                // Jika upload gambar berhasil, simpan nama file ke dalam database
                $data['gambar'] = $this->upload->data('file_name');
            } else {
                // Jika upload gambar gagal, tampilkan pesan error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('dosen/create');
            }

            // Panggil method dari model untuk menyimpan data ke database
            $this->Dosen_model->createDosen($data);

            // Redirect ke halaman daftar dosen atau tampilkan pesan sukses
            $this->session->set_flashdata('success', 'Dosen berhasil ditambahkan');
            redirect('dosen');
        }
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