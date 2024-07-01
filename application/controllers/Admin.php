<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function login() {
        $this->load->view('admin/login');
    }

     public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->admin_model->get_admin($username, $password);
        if ($admin) {
            $this->session->set_userdata('admin_id', $admin->id);
            redirect('admin/dashboard');
        } else {
            redirect('admin/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        redirect('admin/login');
    }

    public function dashboard() {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin/login');
        }
        $data['orders'] = $this->admin_model->get_orders();
        $this->load->view('admin/dashboard', $data);
    }

    public function update_status($order_id) {
        $status = $this->input->post('status');
        $this->admin_model->update_order_status($order_id, $status);
        redirect('admin/dashboard');
    }
}
