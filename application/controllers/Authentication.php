<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index()
	{
		
    }
   	
    
    public function register()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('auth/register'); // conten utama
		$this->load->view('template/footer');
	}

	public function daftar()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('daftar'); // conten utama
		$this->load->view('template/footer');
	}

	public function lupa_password()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('lupa_password'); // conten utama
		$this->load->view('template/footer');
	}
}