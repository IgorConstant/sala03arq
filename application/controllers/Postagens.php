<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Postagens extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('postagens_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }


    public function index()
    {
        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Projetos';

        $data['app_projetos'] = $this->portfolio_model->listarProjetos();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listProjects');
        $this->load->view('dashboard/footer');
    }
}
