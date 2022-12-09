<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
	}
    public function index()
	{
        if(!empty($this->session->userdata('isLogin') == TRUE)) {
            redirect(base_url('homepage'));
        }
		$this->load->view('login');
	}
    public function login_action() {
        $this->load->model('db_model');
        $table = 'user_accounts';
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $result = $this->db_model->db_verification($table, ["username" => $username]);
        if ($result->num_rows() == 0) {
            $this->session->set_flashdata('error', 'Username Tidak Terdaftar');
            redirect(base_url('login'));
        }
        else {
            $data = $result->row();
            if(password_verify($password, $data->password)) {
                $this->session->set_userdata('isLogin', true);
                $this->session->set_userdata('username', $username);
                redirect(base_url('homepage'));
            }
            else {
                $this->session->set_flashdata('error', 'Password yang dimasukan salah');
                redirect(base_url('login'));
            }
        }
    }
    public function signup()
	{
        if(!empty($this->session->userdata('isLogin') == TRUE)) {
            redirect(base_url('homepage'));
        }
		$this->load->view('signup');
	}

    public function signup_action() {
        $this->load->model('db_model');
        $table = 'user_accounts';

        $name = $this->input->post('nama_lengkap');
        $phone = $this->input->post('no_tlp');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        if ($password1 === $password2) {
            $num_username = $this->db_model->db_verification($table, ["username" => $username])->num_rows();
            $num_email = $this->db_model->db_verification($table, ["email" => $email])->num_rows();
            if ($num_username == 0 && $num_email == 0) {
                $password = password_hash($password1, PASSWORD_DEFAULT);
                $user_data = array(
                    "fullname" => $name,
                    "phone" => $phone,
                    "email" => $email,
                    "username" => $username,
                    "password" => $password,
                );
                $result = $this->db_model->addToDatabase($table, $user_data);
                if ($result) {
                    redirect(base_url('login'));
                }
            }
            else if($num_email > 0 ) {
                $this->session->set_flashdata('error', 'Email sudah terdaftar');
                redirect(base_url('signup'));
            }
            else if ($num_username > 0) {
                $this->session->set_flashdata('error', 'Username sudah terdaftar');
                redirect(base_url('signup'));
            }
        }
        else {
            $this->session->set_flashdata('error', 'Password tidak Sesuai');
            redirect(base_url('signup'));
        }
    }

    public function homepage() {
        if(!empty($this->session->userdata('isLogin') == FALSE)) {
            $this->session->set_flashdata('error', 'Pengguna belum Masuk');
            redirect(base_url('login'));
        }
        $data_parsed['username'] = $this->session->userdata('username');
        $this->load->view('index', $data_parsed );
    }

    public function logout_action() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    /* HAPUS BAGIAN TESTDB SETELAH PROJECT SELESAI SERTA ROUTING PADA CONFIG/ROUTES.PHP DAN MODEL TESTDB() PADA DOKUMEN APPLICATION/MODELS/DB_MODEL.PHP */
    public function testdb() {
        $this->load->model('db_model');
        $data = $this->db_model->testdb();
        foreach ($data as $user) {
            echo "Name : ".$user['fullname']."<br/>";
        }
    }
}
