<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class detail extends CI_Controller {
    public function index() {
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
        $this->load->view('detail', $data_parsed);
    }
}
?>