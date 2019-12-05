<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('faqmodel');
		$this->load->model('eventmodel');
		$this->load->model('kategorimodel');
	}


	public function index()
	{
		$data['title'] = "HI, Jangan terlewat event fasilkom";
		$data['deskripsi'] = "Pilih event rekomendasi yang mungkin kamu minati";
		//manggil model faq yang method get();
		$data['events'] = $this->eventmodel->get();
		$data['new'] = $this->eventmodel->new();
		$data['near'] = $this->eventmodel->near();
		$data['categories'] = $this->kategorimodel->cat();

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
		$data['master_faqs'] = $this->faqmodel->get();

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