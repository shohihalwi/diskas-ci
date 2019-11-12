<?php
Class KategoriModel extends CI_Model
{
    private $table = "kategori";

    function __constuct()
    {
        parent::__constuct();
    }

    public function get()
    {
        return $this->db->get($this->table)->result_array();
    }
}