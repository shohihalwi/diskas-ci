<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function buat_event()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('buat_event'); // conten utama
		$this->load->view('template/footer');
	}

	public function rekomendasi()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('rekomendasi'); // conten utama
		$this->load->view('template/footer');
	}

	public function all_event()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('all_event'); // conten utama
		$this->load->view('template/footer');
			}

	public function detail($nama_event)
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('event/detail_event'); // conten utama
		$this->load->view('template/footer');
	}

	public function westlife()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('westlife'); // conten utama
		$this->load->view('template/footer');
	}
}

