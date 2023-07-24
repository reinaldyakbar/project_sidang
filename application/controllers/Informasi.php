<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_informasi');
    }

    public function info_ta1()
    {
        $data['info_ta1'] = $this->model_informasi->getInfoTA1();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/input_ta1');
        $this->load->view('layout/footer');
    }
    public function info_ta2()
    {
        $data['info_ta2'] = $this->model_informasi->getInfoTA1();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/input_ta2');
        $this->load->view('layout/footer');
    }

    public function submit_form()
    {
        if ($this->input->post()) {
            $data = array(
                'prosedur_ta1' => $this->input->post('prosedur_ta1'),
                'syarat_admin_ta1' => $this->input->post('syarat_admin_ta1'),
                'syarat_akademik_ta1' => $this->input->post('syarat_akademik_ta1'),
                'syarat_sidang_ta1' => $this->input->post('syarat_sidang_ta1')
            );

            // You can add validation rules here if required

            // Insert data into the database
            if ($this->model_informasi->insert_data($data)) {
                // Data submitted successfully, redirect to the informasi page
                redirect('informasi/info_ta1?submitted=1'); // Replace '/informasi' with the actual URL of the informasi page
            } else {
                echo "Error: Unable to submit data.";
            }
        }
    }
    public function submit_formTA2()
    {
        if ($this->input->post()) {
            $data = array(
                'pola_bentuk_ta2' => $this->input->post('pola_bentuk_ta2'),
                'syarat_admin_ta2' => $this->input->post('syarat_admin_ta2'),
                'syarat_akademik_ta2' => $this->input->post('syarat_akademik_ta2'),
                'syarat_sidang_ta2' => $this->input->post('syarat_sidang_ta2')
            );

            // You can add validation rules here if required

            // Insert data into the database
            if ($this->model_informasi->insert_dataTA2($data)) {
                // Data submitted successfully, redirect to the informasi page
                redirect('informasi/info_ta2?submitted=1'); // Replace '/informasi' with the actual URL of the informasi page
            } else {
                echo "Error: Unable to submit data.";
            }
        }
    }
}