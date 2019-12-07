<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EventModel extends CI_Model
{
    //untuk menmpilkan data pada table eventberdasarkan rekomendasi
    public function get()

    {
        $query = $this->db->query('select * from events inner join categories on events.category_id = categories.id order by event_date desc');
        return $query->result_array();
    }

    public function new()
    {
        $query = $this->db->query('select * from events inner join categories on events.category_id = categories.id order by event_date desc');
        return $query->result_array();
    }
    public function near()

    {
        $query = $this->db->query('select * from events order by event_date desc');
        return $query->result_array();
    }

    public function detail($id)
    {
        $this->db->select('categories.name as category_name, events.*');
        $this->db->from('events');
        $this->db->join('categories', 'categories.id = events.category_id');
        $this->db->where('events.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getEventTicket($event_id){
        $this->db->from('event_tickets');
        $this->db->where('event_id', $event_id);
        $query = $this->db->get();
        return $query->result_array();
    }
}

/* End of file EventModel.php */