<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $this->load->view('teamplate_admin/header');
        $this->load->view('teamplate_admin/navbar');
        $this->load->view('teamplate_admin/sidebar');
        $this->load->view('admin/product');
        $this->load->view('teamplate_admin/footer');
    }
}
