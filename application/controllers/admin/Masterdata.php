<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdata extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategorimodel');
    }

    public function kategori()
	{
	    // Get data from model
	    $data['kategori'] = $this->kategorimodel->get();

        $this->render_page_admin('admin/masterdata/kategori/list', $data);
    }



}
