<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tracking_model');
    }

    public function index() {
        $this->load->view('tracking/index');
    }

    public function check_status() {
        $order_id = $this->input->post('order_id');
        $data['order'] = $this->tracking_model->get_order($order_id);
        $this->load->view('tracking/status', $data);
    }
}
