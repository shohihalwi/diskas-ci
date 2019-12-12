<?php

defined('BASEPATH') or exit('No direct script access allowed');

class contactusModel extends CI_Model
{
    //untuk menmpilkan data pada table faq
    public function get()
    {
        $query = $this->db->get('master_contacts');
        return $query->result_array();
    }
}

/* End of file FaqModel.php */