<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index()
	{
		
    }
    
    public function login()
	{
		$this->load->view('auth/login');
    }

    public function google()
    {
        // check have post
        if (null != $this->input->post()){

            $data = array(
                'nama' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'avatar' => $this->input->post('avatar'),
                'google_token' => $this->input->post('token'),
                'user_role_id' => 1,
            );

            // check is token have exist in database
            $this->db->where('email', $this->input->post('email'));
            $checkUser = $this->db->get('users')->result_array();

            if (count($checkUser) == 0){
                $this->db->insert('users', $data);
            }else{
                // create session
                $this->new_session($data);
                echo "signed";
            }
        }else{
            redirect(base_url());
        }
    }
    
    public function register()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('auth/register'); // conten utama
		$this->load->view('template/footer');
	}

	private function new_session($array){
        $this->session->set_userdata($array);
    }

    public function signout(){
        $this->session->sess_destroy();
        // redirect(base_url());

        echo "session destroyed";
    }
}
