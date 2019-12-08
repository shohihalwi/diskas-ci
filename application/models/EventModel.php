<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EventModel extends CI_Model
{
    //untuk menmpilkan data pada table eventberdasarkan rekomendasi
    public function get()
    {
        $this->db->select('categories.name, events.*');
        $this->db->from('events');
        $this->db->join('categories', 'categories.id = events.category_id');
        $this->db->where('events.status_id', 1); //harus event yang di approve
        $this->db->where('events.is_active', 1); //harus event yang di publish
        $this->db->order_by('event_date', 'RANDOM');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function new()
    {
        $this->db->select('categories.name, events.*');
        $this->db->from('events');
        $this->db->join('categories', 'categories.id = events.category_id');
        $this->db->where('events.status_id', 1); //harus event yang di approve
        $this->db->where('events.is_active', 1); //harus event yang di publish
        $this->db->order_by('created_at', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function near()
    {
        $this->db->select('categories.name, events.*');
        $this->db->from('events');
        $this->db->join('categories', 'categories.id = events.category_id');
        $this->db->order_by('event_date', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detail($id)
    {
        $this->db->select('categories.name as category_name, events.*');
        $this->db->from('events');
        $this->db->join('categories', 'categories.id = events.category_id');
        $this->db->where('events.id', $id);
        $this->db->where('events.status_id', 1); //harus event yang di approve
        $this->db->where('events.is_active', 1); //harus event yang di publish
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