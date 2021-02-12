<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        verificaToken();
    }

    public function index()
    {
			$data['navbar'] = $this->load->view('template/navbar', [], true);
			$this->load->view('template/header');
			$this->load->view('pages/Home/index', $data);
			$this->load->view('template/footer');
    }
}
