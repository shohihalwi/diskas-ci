<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('FaqModel');
		$this->load->model('EventModel');
		$this->load->model('KategoriModel');
	}


	public function index()
	{
		$data['title'] = "Upcoming events";
		$data['deskripsi'] = "Don't miss it, join the upcoming event";
		//manggil model faq yang method get();
		$data['events'] = $this->EventModel->get();
		$data['new'] = $this->EventModel->new();
		$data['near'] = $this->EventModel->near();
		$data['categories'] = $this->kategoriModel->cat();

		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('homepage', $data); // conten utama
		$this->load->view('template/footer');
	}

	public function FAQ()
	{
		$data['title'] = "Frequently Ask Questions";
		$data['deskripsi'] = "Pertanyaan Yang Sering Ditanyakan";
		//manggil model faq yang method get();
		$data['master_faqs'] = $this->FaqModel->get();

		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('FAQ', $data); // conten utama
		$this->load->view('template/footer');
	}

    public function comingsoon()
    {
        $this->load->view('template/meta-header-comingsoon');
        $this->load->view('template/header-comingsoon');
        $this->load->view('comingsoon'); // conten utama
        $this->load->view('template/footer-comingsoon');
    }
}