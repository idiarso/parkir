<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Controller
{
    public function index()
    {
        $this->load->library('upload');

        if (!empty($_FILES['media']['name'])) {
            //cek ukuran gambar(2 MB)
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
            $config['max_size'] = '5000';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('media')) {
                $return = array(
                    'status' => 'failed',
                    'text' => $this->upload->display_errors(),
                );
                echo json_encode($return);
                exit();
            }

            $upload_data = $this->upload->data();
            $nama_file = $upload_data['file_name'];

            $data_to_save['media'] = $nama_file;
        }
        $this->load->view('welcome_message');
    }
}
