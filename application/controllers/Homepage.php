<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('homepage'); // conten utama
		$this->load->view('template/footer');
	}
}

