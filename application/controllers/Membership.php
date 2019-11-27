<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {


    public function profile()
    {
        $this->load->view('template/meta-header-comingsoon');
        $this->load->view('template/header-comingsoon');
        $this->load->view('membership/profile'); // conten utama
        $this->load->view('template/footer-comingsoon');
    }


	public function index()
	{
		$this->load->view('template/meta-header');
		$this->load->view('auth/navbar_mb');
		$this->load->view('membership/membership'); // conten utama
		$this->load->view('template/footer');
    }
   	
   	public function tiketsaya()
	{
		$this->load->view('template/meta-header');
		$this->load->view('auth/navbar_mb');
		$this->load->view('membership/mbtiket'); // conten utama
		$this->load->view('template/footer');
    }

    public function detailevent()
	{
		$this->load->view('template/meta-header');
		$this->load->view('auth/navbar_mb');
		$this->load->view('membership/mb_event'); // conten utama
		$this->load->view('template/footer');
    }

    public function eventdetail()
	{
		$this->load->view('template/meta-header');
		$this->load->view('auth/navbar_mb');
		$this->load->view('membership/mbevent_detail'); // conten utama
		$this->load->view('template/footer');
    }    
   	
   	
   
}
