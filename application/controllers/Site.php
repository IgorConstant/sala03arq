<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->model('site_model');
        $this->load->model('galeria_model');
    }


    public function index()
    {

        $data['titulo'] = 'Sala 03 Arquitetura';
        $this->load->view('web/index');
    }

    public function home()
    {
        $data['titulo_pagina'] = 'Home - Sala 03 Arquitetura';
        $data['app_home'] = $this->site_model->listarBanners();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/home');
    }


    public function sala03()
    {
        $data['titulo_pagina'] = 'Sala 03 Arquitetura';
        $data['app_funcionarios'] = $this->site_model->listarEquipe();
        $data['app_conteudo'] = $this->site_model->listarConteudo();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/a-sala03');
    }

    public function projetos()
    {
        $data['titulo_pagina'] = 'Projetos - Sala 03 Arquitetura';
        $data['app_projetos'] = $this->site_model->listarProjetos();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/projetos');
    }


    public function visualizarprojeto($id)
    {
        $data['titulo_pagina'] = 'Projetos - Sala 03 Arquitetura';
        $projectGallery = $this->site_model->getGalleryInd($id);
        $query = $this->site_model->getProjectInd($id);
        $data['query'] = $query;
        $data['projectGallery'] = $projectGallery;


        $this->load->view('web/layout/header', $data);
        $this->load->view('web/template-projeto');
    }


    public function contato()
    {
        $data['titulo_pagina'] = 'Contato - Sala 03 Arquitetura';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/contato');
    }
}
