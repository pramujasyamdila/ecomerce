<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('teamplate_landing/header');
        $this->load->view('teamplate_landing/navbar');
        $this->load->view('home_landing/index');
        $this->load->view('teamplate_landing/footer');
    }
}
