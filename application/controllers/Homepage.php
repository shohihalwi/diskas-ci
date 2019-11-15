<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('faqmodel');
	}


	public function index()
	{
		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('homepage'); // conten utama
		$this->load->view('template/footer');
	}

	public function FAQ()
	{
		$data['title'] = "Frequently Ask Questions";
		$data['deskripsi'] = "Pertanyaan Yang Sering Ditanyakan";
		//manggil model faq yang method get();
		$data['faq'] = $this->faqmodel->get();

		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('FAQ', $data); // conten utama
		$this->load->view('template/footer');
	}
}