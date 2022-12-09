<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Db_model extends CI_Model {

    public function db_verification($table, $data) {
        return $this->db->get_where($table, $data);
    }

    public function getAllData($table) {
        return $this->db->get($table);
    }

    public function addToDatabase($table, $data) {
        $result = $this->db->insert($table, $data);
        return $result;
    }
    
    public function testdb() {
        $data = $this->db->query("SELECT * FROM user_accounts");
        return $data->result_array();
    }
}
?>