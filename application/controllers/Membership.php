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
}

