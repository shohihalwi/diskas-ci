<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Controller {

	public function index()
	{
	    $data = null;
        $this->render_page_admin('admin/dashboard', $data);
    }

    public function events()
    {
        $query = $this->db->get('event')->result_array();

        $data['events'] = $query;

        $this->render_page_admin('admin/events/list', $data);
    }

    public function detail()
    {
        $data = null;
        $this->render_page_admin('admin/events/detail', $data);
    }

    public function users()
    {
        $data = null;
        $this->render_page_admin('admin/users/list', $data);
    }

}
