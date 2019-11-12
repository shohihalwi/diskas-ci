<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_Controller extends CI_Controller{
    function render_page($content, $data = NULL){
        /*
        * $data['headernya'] , $data['contentnya'] , $data['footernya']
        * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
        * */
        $data['meta'] = $this->load->view('template/meta', $data, TRUE);
        $data['header'] = $this->load->view('template/header', $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);
        $data['footer'] = $this->load->view('template/footer', $data, TRUE);
        $this->load->view('template/layout', $data);
    }

    function render_page_admin($content, $data = NULL){
        /*
        * $data['headernya'] , $data['contentnya'] , $data['footernya']
        * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
        * */
        $data['meta'] = $this->load->view('template-admin/meta-header', $data, TRUE);
        $data['header'] = $this->load->view('template-admin/header', $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);
        $data['footer'] = $this->load->view('template-admin/footer', $data, TRUE);
        $this->load->view('template-admin/layout', $data);
    }
}