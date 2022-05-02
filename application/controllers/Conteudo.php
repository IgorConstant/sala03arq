<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Conteudo extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();

        //Load do Model
        $this->load->model('conteudo_model');

        //Load Form_validation
        $this->load->library('form_validation');
    }


    //Função Inicial do Controller
    public function index()
    {
        $this->editarconteudo();
    }


    public function editarconteudo($id = 1)
    {


        $query = $this->conteudo_model->getConteudoID($id);
        $this->form_validation->set_rules('tituloConteudo', 'Título Conteúdo', 'trim|required');
        $this->form_validation->set_rules('citacaoConteudo', 'Citação', 'trim|required');
        $this->form_validation->set_rules('textoConteudo', 'Texto Conteúdo', 'trim|required');

        if ($this->form_validation->run() == TRUE) {


            $inputEditarConteudo['conteudo'] = $this->input->post('textoConteudo');
            $inputEditarConteudo['titulo'] = $this->input->post('tituloConteudo');
            $inputEditarConteudo['citacao'] = $this->input->post('citacaoConteudo');

            $this->conteudo_model->atualizarConteudo($inputEditarConteudo, ['id' => $this->input->post('idConteudo')]);
            redirect('admin', 'refresh');
        } else {
            $data['titulo_pagina'] = 'Editar A Sala 03';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/listContent');
            $this->load->view('dashboard/footer');
        }
    }
}
