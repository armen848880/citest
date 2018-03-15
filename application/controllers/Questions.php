<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

    public function index()
    {
        $this->load->view('questions');
    }

    public function addAnswer()
    {
        $this->load->helper('url');
        if(!$this->input->is_ajax_request()) {
            die(site_url('add_answer'));
        }


    }
}
