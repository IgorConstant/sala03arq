<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('portfolio_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Projetos';

        $data['app_funcionarios'] = $this->portfolio_model->listarProjetos();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listProjects');
        $this->load->view('dashboard/footer');
    }

    public function adicionarprojeto()
    {
        
    
    }
}
