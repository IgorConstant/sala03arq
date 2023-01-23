<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Portfolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }

        $this->load->model('portfolio_model');
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


    public function adicionarprojeto()
    {
        $this->form_validation->set_rules('tituloProjeto', 'Titulo Projeto', 'required', array('required' => 'O Campo Título do Projeto é obrigatório'));
        $this->form_validation->set_rules('fichaTecnica', 'Ficha Técnica', 'required', array('required' => 'O Campo Ficha Técnica é obrigatório'));
        $this->form_validation->set_rules('localizacaoProjeto', 'Localização', 'required', array('required' => 'O Campo Localização é obrigatório'));
        $this->form_validation->set_rules('equipeProjeto', 'Equipe', 'required', array('required' => 'O Campo Equipe é obrigatório'));
        $this->form_validation->set_rules('categoriaProjeto', 'Categoria', 'required', array('required' => 'O Campo Categoria é obrigatório'));
        $this->form_validation->set_rules('urlSEO', 'Categoria', 'required', array('required' => 'O Campo SEO é obrigatório'));


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/galeria/projeto-destaque';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '4048';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('fotoDestaque')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Insira uma imagem no formato correto.</div>');
                redirect('portfolio/adicionarprojeto');
            } else {
                $inputAdicionarProjeto['titulo_projeto'] = $this->input->post('tituloProjeto');
                $inputAdicionarProjeto['ficha_tecnica'] = $this->input->post('fichaTecnica');
                $inputAdicionarProjeto['localizacao'] = $this->input->post('localizacaoProjeto');
                $inputAdicionarProjeto['equipe'] = $this->input->post('equipeProjeto');
                $inputAdicionarProjeto['categoria_projeto'] = $this->input->post('categoriaProjeto');
                $inputAdicionarProjeto['url_seo'] = $this->input->post('urlSEO');
                $inputAdicionarProjeto['destaque'] = $this->upload->data('file_name');

                $this->portfolio_model->criarProjeto($inputAdicionarProjeto);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Projeto adicionado com sucesso!</div>');
                redirect('portfolio', 'refresh');
            }
        } else {
            $data['titulo_site'] = 'Módulo Projetos';
            $data['titulo_pagina'] = 'Adicionar Projetos';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addProject');
            $this->load->view('dashboard/footer');
        }
    }


    public function editarprojeto($id = NULL)
    {

        $query = $this->portfolio_model->getProjectID($id);


        $this->form_validation->set_rules('tituloProjeto', 'Titulo Projeto', 'required', array('required' => 'O Campo Título do Projeto é obrigatório'));
        $this->form_validation->set_rules('fichaTecnica', 'Ficha Técnica', 'required', array('required' => 'O Campo Ficha Técnica é obrigatório'));
        $this->form_validation->set_rules('localizacaoProjeto', 'Localização', 'required', array('required' => 'O Campo Localização é obrigatório'));
        $this->form_validation->set_rules('equipeProjeto', 'Equipe', 'required', array('required' => 'O Campo Equipe é obrigatório'));
        $this->form_validation->set_rules('categoriaProjeto', 'Categoria', 'required', array('required' => 'O Campo Categoria é obrigatório'));
        $this->form_validation->set_rules('urlSEO', 'URL Seo', 'required', array('required' => 'O Campo de SEO é obrigatório'));

        if ($this->form_validation->run() == TRUE) {

            $nome_imagem = NULL;

            //Upload Imagem
            $config['upload_path'] = './upload/galeria/projeto-destaque';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = 5048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('fotoDestaque')) {
                $nome_imagem = $this->upload->data('file_name');
            }


            $inputEditarProjeto['titulo_projeto'] = $this->input->post('tituloProjeto');
            $inputEditarProjeto['ficha_tecnica'] = $this->input->post('fichaTecnica');
            $inputEditarProjeto['localizacao'] = $this->input->post('localizacaoProjeto');
            $inputEditarProjeto['equipe'] = $this->input->post('equipeProjeto');
            $inputEditarProjeto['categoria_projeto'] = $this->input->post('categoriaProjeto');
            $inputEditarProjeto['url_seo'] = $this->input->post('urlSEO');

            if ($nome_imagem) {
                $inputEditarProjeto['destaque'] = $nome_imagem;
            }

            $this->portfolio_model->atualizarProjetos($inputEditarProjeto, ['id' => $this->input->post('idProjeto')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Projeto atualizado com sucesso!</div>');
            redirect('portfolio', 'refresh');
        } else {
            $data['titulo_pagina'] = 'Editar Projeto';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/editProject');
            $this->load->view('dashboard/footer');
        }
    }


    public function deletarprojeto($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um projeto.</div>');
            redirect('portfolio', 'refresh');
        }

        $query = $this->portfolio_model->getProjectID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Projeto não encontrado.</div>');
        }


        $this->portfolio_model->apagarProjeto($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Projeto excluido com sucesso!</div>');
        redirect('equipe', 'refresh');
    }
}
