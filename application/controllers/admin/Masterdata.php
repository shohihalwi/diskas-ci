<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdata extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategorimodel');
    }

    public function kategori($param = false, $id = false)
	{
	    if ($param == "add"){
	        $this->kategori_add();
        }elseif ($param == "edit"){
            $this->kategori_edit($id);
        }elseif ($param == "delete"){
            $this->kategori_delete($id);
        }
	    else{
            // Set default data
            $data = array(
                'title' => 'Master Data Kategori',
                'buttonAdd' => true
            );

            // Get data from model
            $data['kategori'] = $this->kategorimodel->get();

            $this->render_page_admin('admin/masterdata/kategori/list', $data);
        }
    }

    public function kategori_add()
    {
        if (null !== $this->input->post() && !empty($this->input->post())){
            $store = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
            );
            try{
                $this->kategorimodel->store($store);
                return redirect(BASE_URL . PATH_ADMIN . "/masterdata/kategori");
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }else{
            // Set default data
            $data = array(
                'title' => 'Tambah Kategori',
                'buttonAdd' => false
            );

            $this->render_page_admin('admin/masterdata/kategori/form', $data);
        }
    }

    public function kategori_edit($id)
    {
        if (null !== $this->input->post() && !empty($this->input->post())){
            $store = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
            );
            try{
                $this->kategorimodel->update($store, $id);
                return redirect(BASE_URL . PATH_ADMIN . "/masterdata/kategori");
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }else{
            // Set default data
            $data = array(
                'title' => 'Edit Kategori',
                'buttonAdd' => false
            );

            // Get data by id from model
            $data['kategori'] = $this->kategorimodel->find($id);

            $this->render_page_admin('admin/masterdata/kategori/form', $data);
        }
    }

    public function kategori_delete($id)
    {
        try{
            $this->kategorimodel->delete($id);
            return redirect(BASE_URL . PATH_ADMIN . "/masterdata/kategori");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
