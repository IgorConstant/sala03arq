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

        $this->form_validation->set_rules('tituloProjeto', 'Titulo Projeto', 'required', array('required' => 'O Campo Título do Projeto é obrigatório'));
        $this->form_validation->set_rules('fichaTecnica', 'Ficha Técnica', 'required', array('required' => 'O Campo Ficha Técnica é obrigatório'));
        $this->form_validation->set_rules('localizacaoProjeto', 'Localização', 'required', array('required' => 'O Campo Localização é obrigatório'));
        $this->form_validation->set_rules('equipeProjeto', 'Equipe', 'required', array('required' => 'O Campo Equipe é obrigatório'));
        $this->form_validation->set_rules('categoriaProjeto', 'Categoria', 'required', array('required' => 'O Campo Categoria é obrigatório'));

        if ($this->form_validation->run() == TRUE) {
        }


        //Titulo
        $data['titulo_site'] = 'Módulo Projetos';
        $data['titulo_pagina'] = 'Adicionar Projetos';

        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/addProject');
        $this->load->view('dashboard/footer');
    }
}
