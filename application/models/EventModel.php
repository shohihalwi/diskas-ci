<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EventModel extends CI_Model
{
    //untuk menmpilkan data pada table eventberdasarkan rekomendasi
    public function get()

    {
        $query = $this->db->query('select * from events order by faculty_id desc');
        return $query->result_array();
    }

    public function new()
    {
        $query = $this->db->query('select * from events order by created_at desc');
        return $query->result_array();
    }
    public function near()

    {
        $query = $this->db->query('select * from events order by event_date desc');
        return $query->result_array();
    }
    public function detailevent()

    {
        $query = $this->db->get('events');
        return $query->row_array();
    }
}

/* End of file EventModel.php */