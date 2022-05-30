<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{

    // construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Auth']);
    }

    public function index()
    {
        $this->templateauth->view('authentication/login');
    }
}
