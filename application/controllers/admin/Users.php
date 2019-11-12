<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends My_Controller {

	public function index()
	{
        // Get query return to array
        $query = $this->db->get('users')->result_array();

        // Declare variable for view
        $data['users'] = $query;

        $this->render_page_admin('admin/users/list', $data);
    }


}
