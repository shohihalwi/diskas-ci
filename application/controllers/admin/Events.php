<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends My_Controller {

	public function index()
	{
        // Get query return to array
        $query = $this->db->get('events')->result_array();

        // Declare variable for view
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
        // Get query return to array
        $query = $this->db->get('users')->result_array();

        // Declare variable for view
        $data['users'] = $query;

        $this->render_page_admin('admin/users/list', $data);
    }

}
