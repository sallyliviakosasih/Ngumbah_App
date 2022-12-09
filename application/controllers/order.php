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
    public function data_order() {
        $this->load->model('db_model');
        $id_package = $this->input->get('id');
        $this->data_parsed = [
            "package_name" => $this->db_model->db_verification('package_table', ["id" => $id_package])->row()->package,
            "username" => $this->session->userdata('username'),
        ];
        $this->load->view('data_order',$this->data_parsed);
    }

    public function order_action() {
        $this->load->model('db_model');
        $id_package = $this->input->get('id');
        $data = [
            "username" => $this->session->userdata('username'),
            "weight" => $this->input->post('weight'),
            "notes" => $this->input->post('notes'),
            "name" => $this->input->post('user_name'),
            "phone" => $this->input->post('phone'),
            "address" => $this->input->post('address'),
            "package_id" => $id_package,
            "package_name" => $this->db_model->db_verification('package_table', ["id" => $id_package])->row()->package,
        ];
        $this->session->set_userdata('isOrdered', true);
        $this->session->set_userdata('order_data', $data);
        redirect(base_url('confirmation'));
        
    }
    public function confirmation() {
        if (!empty($this->session->userdata('isOrdered') == TRUE)) {
            $this->load->model('db_model');
            $order_data_parsed = $this->session->userdata('order_data');
            $package_id_parsed = $order_data_parsed['package_id'];

            $username_parsed = $order_data_parsed['username'];
            $weight_parsed = $order_data_parsed['weight'];
            $notes_parsed = $order_data_parsed['notes'];
            $name_parsed = $order_data_parsed['name'];
            $phone_parsed = $order_data_parsed['phone'];
            $address_parsed = $order_data_parsed['address'];

            $package_data = $this->db_model->db_verification('package_table', ["id" => $package_id_parsed])->row();
            $package_price = $package_data->price;
            $package_name = $package_data->package;
            
            $package_total_price = $package_price * $weight_parsed;

            $delivery_cost = 10000;
            $total_cost = $package_total_price + $delivery_cost;

            $order_data = [
                "username" => $username_parsed,
                "name" => $name_parsed,
                "phone" => $phone_parsed,
                "address" => $address_parsed,
                "package_name" => $package_name,
                "weight" => $weight_parsed,
                "notes" => $notes_parsed,
                "package_cost" => $package_total_price,
                "delivery_cost" => $delivery_cost,
                "total_cost" => $total_cost,
            ];

            $this->session->set_userdata('order_data', $order_data);
            $this->load->view('confirmation', $order_data);
            $this->session->set_userdata('isOrdered', FALSE);
        } else {
            redirect(base_url('order'));
        }

    }

    public function confirmation_action() {
        $order_data = $this->session->userdata('order_data');
        $this->load->helper('string');
        $this->load->model('db_model');
        $this->load->helper('date');

        $id = 'NA-'.random_string('alnum', 10);
        $payment_status = 'Lunas';
        $order_status = 'In-Process';

        $data = [
            "id" => $id,
            "username" => $order_data['username'],
            "name" => $order_data['name'],
            "phone" => $order_data['phone'],
            "address" => $order_data['address'],
            "package_name" => $order_data['package_name'],
            "weight" => $order_data['weight'],
            "notes" => $order_data['notes'],
            "package_cost" => $order_data['package_cost'],
            "delivery_cost" => $order_data['delivery_cost'],
            "total_payment" => $order_data['total_cost'],
            "payment_status" => $payment_status,
            "status" => $order_status,
            "date" => mdate("%Y-%m-%d"),
        ];

        $result = $this->db_model->addToDatabase('user_transaction', $data);
        if($result) {
            redirect(base_url('detail_transaction').'?id='.$id);
        } else {
            redirect(base_url('order'));
        }
    }

    public function detail() {
        $order_data = $this->session->userdata('order_data');
        $this->load->view('detail',$order_data);
    }
}
?>