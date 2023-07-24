<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');
        $this->load->library('session');
    }

    public function index()
    {
        // If the user is already logged in, redirect to the admin dashboard
        if ($this->session->userdata('logged_in')) {
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/login');
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->model_auth->get_user($username, $password);

        if ($user) {
            // Set user data in session
            $user_data = array(
                'id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);

            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect('admin/login');
    }
    public function dashboard()
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
    public function jadwal()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/jadwal');
        $this->load->view('layout/footer');
    }


}