<?php
Class KategoriModel extends CI_Model
{
    private $table = "kategori";
    private $primary_key = "kategori_id";

    function __constuct()
    {
        parent::__constuct();
    }

    public function get()
    {
        $this->db->where('deleted_at', NULL); // Not data by soft delete
        return $this->db->get($this->table)->result_array();
    }

    public function find($id)
    {
        $this->db->where($this->primary_key, $id);
        return $this->db->get($this->table)->row_array();
    }

    public function store($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        $data['updated_at'] = current_timestamp();
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $data['deleted_at'] = current_timestamp();
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table, $data);
    }
}