<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
    }


    public function index()
    {

        $data['titulo'] = 'Sala 03 Arquitetura';

        $this->load->view('web/index');
    }

    public function home()
    {
        $data['titulo_pagina'] = 'Home - Sala 03 Arquitetura';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/home');
    }
}
