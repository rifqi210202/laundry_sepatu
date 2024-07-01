<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_admin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        return $this->db->get('admins')->row();
    }

    public function get_orders() {
        return $this->db->get('orders')->result();
    }

    public function update_order_status($order_id, $status) {
        $this->db->where('id', $order_id);
        $this->db->update('orders', ['status' => $status]);
    }
}
