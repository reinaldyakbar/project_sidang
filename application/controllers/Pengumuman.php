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
        $this->load->library('form_validation');

        // Set rules for form validation
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('koordinator', 'Koordinator', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Form validation failed, show the form again with validation errors
            $this->load->view('pengumuman/tambah_pengumuman');
        } else {
            // Form validation passed, process the form data
            $judul = $this->input->post('judul');
            $isi_pengumuman = $this->input->post('isi_pengumuman');
            $koordinator = $this->input->post('koordinator');
            $tanggal = $this->input->post('tanggal');

            // Format the date to "17 Agustus 2023" before inserting into the database
            $formatted_date = date('d F Y', strtotime(str_replace(',', '', $tanggal)));

            $data = array(
                'judul' => $judul,
                'isi_pengumuman' => $isi_pengumuman,
                'koordinator' => $koordinator,
                'tanggal' => $formatted_date
            );

            // Assuming that $this->model_pengumuman->insert() is a method in your model to insert data into the database
            $this->model_pengumuman->insert($data, 'tb_pengumuman');
            $_SESSION["sukses"] = 'pengumuman berhasil ditambahkan';
            redirect('pengumuman/index');
        }
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