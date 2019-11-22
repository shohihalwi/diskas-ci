<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FakultasModel extends CI_Model
{
    //untuk menmpilkan data pada table faq
    public function fac()
    {
        $query = $this->db->get('fakultas');
        return $query->result_array();
    }
}

/* End of file FaqModel.php */