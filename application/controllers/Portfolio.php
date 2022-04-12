<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->PageLimit = 20;
        $this->load->model('portfolio_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
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


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './upload/projetos';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10048';
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
                $inputAdicionarProjeto['destaque'] = $this->upload->data('file_name');


                $image = array();
                $ImageCount = count($_FILES['fotos']['name']);
                for ($i = 0; $i < $ImageCount; $i++) {
                    $_FILES['file']['name']       = $_FILES['fotos']['name'][$i];
                    $_FILES['file']['type']       = $_FILES['fotos']['type'][$i];
                    $_FILES['file']['tmp_name']   = $_FILES['fotos']['tmp_name'][$i];
                    $_FILES['file']['error']      = $_FILES['fotos']['error'][$i];
                    $_FILES['file']['size']       = $_FILES['fotos']['size'][$i];

                    // Configuração do Upload da Imagem
                    $uploadPath = 'upload/projetos';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';

                    // Inicialização de Library Upload
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Upload do Arquivo para o servidor
                    if ($this->upload->do_upload('file')) {
                        // Uploaded file data
                        $imageData = $this->upload->data();
                        $uploadImgData[$i]['fotos'] = $imageData['file_name'];
                    }
                }
                if (!empty($uploadImgData)) {
                    // Insert das Fotos no MYSQL
                    $this->portfolio_model->multipleImages($uploadImgData);
                }

                $this->portfolio_model->criarProjeto($inputAdicionarProjeto);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Banner Adicionado com Sucesso!</div>');
                redirect('portfolio', 'refresh');
            }
        } else {
            //Titulo
            $data['titulo_site'] = 'Módulo Projetos';
            $data['titulo_pagina'] = 'Adicionar Projetos';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addProject');
            $this->load->view('dashboard/footer');
        }
    }



    public function editarprojeto()
    {
    }
}
