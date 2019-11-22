<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('detaileventmodel');
	}


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

	public function detail($id)
	{
		$data['detail'] = $this->detaileventmodel->get($id);

		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('event/detail_event', $data); // conten utama
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