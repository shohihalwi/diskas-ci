<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('EventModel');
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
		$data['events'] = $this->EventModel->get();

		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('rekomendasi', $data); // conten utama
		$this->load->view('template/footer');
	}

	public function all_event()
	{
		$data['events'] = $this->EventModel->get();

		$this->load->view('template/meta-header');
		$this->load->view('template/header');
		$this->load->view('all_event', $data); // conten utama
		$this->load->view('template/footer');
	}

	public function detail($id, $slug)
	{
		$data['detail'] = $this->EventModel->detail($id);
		$data['tickets'] = $this->EventModel->getEventTicket($id);

		// check event harus aktif dan verified
		if ($data['detail']['is_active'] == 1 && $data['detail']['status_id'] == 1){
            $this->load->view('template/meta-header');
            $this->load->view('template/header');
            $this->load->view('event/detail_event', $data); // conten utama
            $this->load->view('template/footer');
        }else{
            redirect('404');
        }
	}

    public function search()
    {
        $get_keyword = $this->input->get('keyword');
        $data['events'] = $this->EventModel->search($get_keyword);
        $data['keyword'] = $get_keyword;

        $this->load->view('template/meta-header');
        $this->load->view('template/header');
        $this->load->view('search', $data); // conten utama
        $this->load->view('template/footer');
    }
}