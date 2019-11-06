<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->view('artikel/list-artikel');
    }
    
    public function detail($param1, $param2)
	{
        $data['id_artikel'] = $param1;
        $data['slug'] = $param2;

		$this->load->view('artikel/detail-artikel', $data);
	}
}

