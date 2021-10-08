<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('teamplate_admin/header');
        $this->load->view('teamplate_admin/navbar');
        $this->load->view('teamplate_admin/sidebar');
        $this->load->view('admin/index.php');
        $this->load->view('teamplate_admin/footer');
    }
}
