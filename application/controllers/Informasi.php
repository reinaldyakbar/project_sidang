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
                echo "Data submitted successfully!";
            } else {
                echo "Error: Unable to submit data.";
            }
        }
    }
}