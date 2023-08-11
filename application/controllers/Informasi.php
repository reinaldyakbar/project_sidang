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
        $data['info_ta1'] = $this->model_informasi->get_all_info();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/info_ta1', $data);
        $this->load->view('layout/footer');
    }
    public function edit_info_ta1($id)
    {
        $data['id'] = $id;
        $data['informasi'] = $this->model_informasi->get_all_info();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/edit_info_ta1', $data);
        $this->load->view('layout/footer');
    }
    public function info_ta2()
    {
        $data['info_ta2'] = $this->model_informasi->get_all_info_ta2();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/info_ta2', $data);
        $this->load->view('layout/footer');
    }
    public function edit_info_ta2($id)
    {
        $data['id'] = $id;
        $data['informasi'] = $this->model_informasi->get_all_info_ta2();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/edit_info_ta1', $data);
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        if ($this->input->post()) {
            $data = array(
                'berkas_reguler' => $this->input->post('berkas_reguler'),
                'berkas_publikasi' => $this->input->post('berkas_publikasi'),
                'syarat_admin_ta1' => $this->input->post('syarat_admin_ta1'),
                'syarat_akademik_ta1' => $this->input->post('syarat_akademik_ta1')
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
    public function edit($id)
    {
        // Load the model
        $this->load->model('Model_informasi'); // Adjust the model name accordingly

        $data['informasi'] = $this->Model_informasi->get_info_by_id($id); // Make sure the method name is correct

        if (!$data['informasi']) {
            // Informasi not found, handle the error (e.g., show an error message or redirect)
            // You can add your error handling logic here
        }

        if ($this->input->post()) {
            $updated_data = array(
                'berkas_reguler' => $this->input->post('berkas_reguler'),
                'berkas_publikasi' => $this->input->post('berkas_publikasi'),
                'syarat_admin_ta1' => $this->input->post('syarat_admin_ta1'),
                'syarat_akademik_ta1' => $this->input->post('syarat_akademik_ta1'),
                'syarat_sidang_ta1' => $this->input->post('syarat_sidang_ta1')
            );

            // You can add validation rules here if required

            // Update data in the database
            if ($this->Model_informasi->update_data($id, $updated_data)) {
                // Data updated successfully, redirect to the informasi page
                redirect('informasi/info_ta1?updated=1'); // Replace '/informasi' with the actual URL of the informasi page
            } else {
                echo "Error: Unable to update data.";
            }
        }

        // Load the view to display the edit form
        $this->load->view('informasi/info_ta1', $data);
    }


    public function delete($id)
    {
        if ($this->model_informasi->delete_data($id)) {
            // Data deleted successfully, redirect to the informasi page
            redirect('informasi/info_ta1?deleted=1'); // Replace '/informasi' with the actual URL of the informasi page
        } else {
            echo "Error: Unable to delete data.";
        }
    }

    public function delete_ta2($id)
    {
        if ($this->model_informasi->delete_data_ta2($id)) {
            // Data deleted successfully, redirect to the informasi page
            redirect('informasi/info_ta2?deleted=1'); // Replace '/informasi' with the actual URL of the informasi page
        } else {
            echo "Error: Unable to delete data.";
        }
    }

    public function input_ta1()
    {
        $data['info_ta1'] = $this->model_informasi->get_all_info();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/input_ta1', $data);
        $this->load->view('layout/footer');

    }
    public function input_ta2()
    {
        $data['info_ta2'] = $this->model_informasi->get_all_info_ta2();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/input_ta2', $data);
        $this->load->view('layout/footer');

    }
    public function submit_formTA2()
    {
        if ($this->input->post()) {
            $data = array(
                'syarat_akademik_ta2' => $this->input->post('syarat_akademik_ta2'),
                'syarat_admin_ta2' => $this->input->post('syarat_admin_ta2'),
                'berkas_ta2_reguler' => $this->input->post('berkas_ta2_reguler'),
                'berkas_ta2_publikasi' => $this->input->post('berkas_ta2_publikasi'),
                'pasca_reguler' => $this->input->post('pasca_reguler'),
                'pasca_publikasi' => $this->input->post('pasca_publikasi')
            );

            // You can add validation rules here if required

            // Insert data into the database
            if ($this->model_informasi->insert_data_ta2($data)) {
                // Data submitted successfully, redirect to the informasi page
                redirect('informasi/info_ta2?submitted=1'); // Replace '/informasi' with the actual URL of the informasi page
            } else {
                echo "Error: Unable to submit data.";
            }
        }
    }

}