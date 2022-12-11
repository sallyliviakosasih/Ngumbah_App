<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class admin_controller extends CI_Controller {
        public function index() {
            $this->load->view('login_admin');
        }

        public function login_admin_action() {
            $this->load->model('db_model');
            $table = 'admin_account';
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->db_model->db_verification($table, ["username" => $username]);
            if ($result->num_rows() == 0) {
                $this->session->set_flashdata('error', 'Username Tidak Terdaftar');
                redirect(base_url('login_admin'));
            }
            else {
                $data = $result->row();
                if($password == $data->password) {
                    $this->session->set_userdata('admin_username', $username);
                    $this->session->set_userdata('isAdminLogin', true);
                    redirect(base_url('customer_data'));
                } else {
                    $this->session->set_flashdata('error', 'Password yang dimasukan salah');
                    redirect(base_url('login_admin'));
                }
            }
        }

        public function customer_data() {
            $username = $this->session->userdata('admin_username');
            $this->load->model('db_model');
            $data_admin = $this->db_model->db_verification('admin_account', ["username" => $username])->row();
            $data_parsed = [
                "data_admin" => $data_admin,
                "transaction_data" => $this->db_model->getAlldata('user_transaction'),               
            ];

            $this->load->view('customer', $data_parsed);
        }

        public function detail_admin() {
            $id = $this->input->get('id');
            $table = 'user_transaction';
            $this->load->model('db_model');
            $data_transaction = $this->db_model->db_verification($table, ["id" => $id])->row();
            $transaction_status = $this->db_model->getStatusTransaction('transaction_details', $data_transaction->id);
            $data_parsed = [
                "username" => $data_transaction->username,
                "id" => $data_transaction->id,
                "name" => $data_transaction->name,
                "phone" => $data_transaction->phone,
                "address" => $data_transaction->address,
                "package_name" => $data_transaction->package_name,
                "weight" => $data_transaction->weight,
                "payment_status" => $data_transaction->payment_status,
                "order_status" => $transaction_status->row_array(),
            ];
            $this->load->view('detail-admin', $data_parsed);
        }
    }
?>