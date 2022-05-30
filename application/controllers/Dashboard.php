<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_dashboard']);
    }

    public function index()
    {
        $this->templateback->view('dashboard/dashboard');
    }
}
