<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->model('site_model');
        $this->load->model('galeria_model');
        $this->load->library('form_validation');
        $this->load->library('email');
    }


    public function index()
    {

        $data['titulo'] = 'Sala 03 Arquitetura';
        $this->load->view('web/index');
    }

    public function home()
    {
        $data['titulo_pagina'] = 'Home - Sala 03 Arquitetura';
        $data['description'] = 'O estilo SALA 03 é contemporâneo, onde “menos é mais”, simplicidade em voga e o uso inteligente de materiais.';
        $data['app_home'] = $this->site_model->listarBanners();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/home');
    }


    public function sala03()
    {
        $data['titulo_pagina'] = 'Sala 03 Arquitetura';
        $data['description'] = 'Um trabalho colaborativo que tem um único objetivo: a excelência em cada projeto.';
        $data['app_funcionarios'] = $this->site_model->listarEquipe();
        $data['app_conteudo'] = $this->site_model->listarConteudo();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/a-sala03');
    }

    public function projetos()
    {
        $data['titulo_pagina'] = 'Projetos - Sala 03 Arquitetura';
        $data['description'] = 'A arquitetura é perfeita quando ela vai além dos traços, sai do papel e transforma-se numa realidade que atende as necessidades de pessoas.';
        $data['app_projetos'] = $this->site_model->listarProjetos();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/projetos');
    }


    public function visualizarprojeto()
    {

        $data['query'] = $this->site_model->getProjectBySlug($this->uri->segment(2));

        $data['titulo_pagina']             = $data['query'][0]->titulo_projeto . ' - Sala 03 Arquitetura';


        $id                         = $data['query'][0]->id;
        $data['projectGallery']     = $this->site_model->getGalleryInd($id);

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/template-projeto');
    }


    public function contato()
    {

        $data['titulo_pagina'] = 'Contato - Sala 03 Arquitetura';
        $data['description'] = 'Tem interesse em desenvolver um projeto arquitetônico? Entre em contato conosco.';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/contato');
    }
}
