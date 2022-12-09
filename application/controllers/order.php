<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class order extends CI_Controller {
    public function index() {
        $this->load->model('db_model');

        $this->data_parsed = [
            "username" => $this->session->userdata('username'),
            "packages" => $this->db_model->getAlldata('package_table'),
        ];

        $this->load->view('order', $this->data_parsed);
    }
    public function data_order($package) {
        echo 'package: '.$package;
    }
}
?>