<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KategoriModel extends CI_Model
{
    //untuk menmpilkan data pada table faq
    public function cat()
    {
        $query = $this->db->get('categories');
        return $query->result_array();
    }
}

/* End of file FaqModel.php */
