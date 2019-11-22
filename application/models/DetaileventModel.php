<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DetaileventModel extends CI_Model
{
    //untuk menmpilkan data pada table faq
    public function get($id)
    {
        $query = $this->db->query('select * from events where id=' . $id);
        return $query->row_array();
    }

    public function new()
    {
        $query = $this->db->get('events');
        return $query->result_array();
    }

    public function near()
    {
        $query = $this->db->get('events');
        return $query->result_array();
    }
}

/* End of file EventModel.php */