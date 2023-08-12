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
        $data['pengumuman'] = $this->model_pengumuman->get_all_pengumuman();
        $data['dosbim'] = $this->model_dosbim->get_dosbim();
        $totalDosen = $this->model_dosbim->countAllDosen();
        $totalPengumuman = $this->model_pengumuman->count_all_pengumuman();
        $data['totalPengumuman'] = $totalPengumuman;
        $data['totalDosen'] = $totalDosen;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('layout/footer');
    }
    public function dosbim()
    {
        $data['dosbim'] = $this->model_dosbim->get_dosbim();
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
        $kuota = $this->input->post('kuota');
        $gambar = $_FILES['gambar']['name'];
        $dosbimCount = 0;

        if ($gambar != '') {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|svg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "File tidak dapat diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
                $dosbimCount++;
            }
        }

        $data = array(
            'nama' => $nama,
            'npp' => $npp,
            'bidang' => $bidang,
            'kuota' => $kuota,
            'gambar' => $gambar
        );

        $this->load->model('model_dosbim');
        $this->model_dosbim->insert($data, 'tb_dosbim');
        $_SESSION["sukses"] = 'Dosbim berhasil ditambahkan';

        if (!isset($_SESSION["dosbim_count"])) {
            $_SESSION["dosbim_count"] = $dosbimCount;
        } else {
            $_SESSION["dosbim_count"] += $dosbimCount;
        }

        redirect('admin/dosbim');
    }

    public function countDosen()
    {
        $this->load->model('model_dosbim');
        $jumlahDosen = $this->model_dosbim->countAllDosen();
        echo "Jumlah Dosen: " . $jumlahDosen;
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama');
        $npp = $this->input->post('npp');
        $bidang = $this->input->post('bidang');
        $kuota = $this->input->post('kuota');
        $gambar = $_FILES['gambar']['name'];
        $dosbimCount = 0;

        // Lakukan pengecekan dan pengolahan gambar hanya jika ada perubahan gambar
        if ($gambar != '') {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|svg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "File tidak dapat diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
                $dosbimCount++;
            }
        }

        // Lakukan proses update data
        $data = array(
            'nama' => $nama,
            'npp' => $npp,
            'bidang' => $bidang,
            'kuota' => $kuota
        );

        // Jika ada perubahan gambar, tambahkan data gambar ke dalam array
        if ($gambar != '') {
            $data['gambar'] = $gambar;
        }

        $this->load->model('model_dosbim');
        $this->model_dosbim->update($data, $id, 'tb_dosbim');
        $_SESSION["sukses"] = 'Data Dosbim berhasil diupdate';

        if (!isset($_SESSION["dosbim_count"])) {
            $_SESSION["dosbim_count"] = $dosbimCount;
        } else {
            $_SESSION["dosbim_count"] += $dosbimCount;
        }

        redirect('admin/dosbim');
    }
    public function get_dosen_by_id($id)
    {
        return $this->db->get_where('tb_dosbim', array('id' => $id))->row();
    }

    public function delete($id)
    {
        $this->model_dosbim->delete_dosbim($id);
        redirect('admin/dosbim');
    }
    public function edit_dosbim($id)
    {
        $data['dosen'] = $this->model_dosbim->get_dosbim_by_id($id); // Mengambil data dosen berdasarkan ID
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/edit_dosbim', $data);
        $this->load->view('layout/footer');
    }

    public function update_dosen()
    {
        $id = $this->input->post('id'); // Ambil ID dari form
        $nama = $this->input->post('nama');
        $npp = $this->input->post('npp');
        $bidang = $this->input->post('bidang');
        $kuota = $this->input->post('kuota');
        $gambar = $_FILES['gambar']['name'];
        $dosbimCount = 0;

        // Lakukan pengecekan dan pengolahan gambar hanya jika ada perubahan gambar
        if ($gambar != '') {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|svg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "File tidak dapat diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
                $dosbimCount++;
            }
        }

        // Lakukan proses update data
        $data = array(
            'nama' => $nama,
            'npp' => $npp,
            'bidang' => $bidang,
            'kuota' => $kuota
        );

        // Jika ada perubahan gambar, tambahkan data gambar ke dalam array
        if ($gambar != '') {
            $data['gambar'] = $gambar;
        }

        $this->model_dosbim->update_dosbim($id, $data); // Panggil model untuk melakukan update data
        $_SESSION["sukses"] = 'Data Dosbim berhasil diupdate';

        if (!isset($_SESSION["dosbim_count"])) {
            $_SESSION["dosbim_count"] = $dosbimCount;
        } else {
            $_SESSION["dosbim_count"] += $dosbimCount;
        }

        redirect('admin/dosbim');
    }
}
