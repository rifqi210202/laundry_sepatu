<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking_model extends CI_Model {

    public function get_order($order_id) {
        $this->db->where('id', $order_id);
        return $this->db->get('orders')->row();
    }
}
