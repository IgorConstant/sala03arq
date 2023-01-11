<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Equipe extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('equipe_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Equipe';

        $data['app_funcionarios'] = $this->equipe_model->listarEquipe();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listEquip');
        $this->load->view('dashboard/footer');
    }


    public function adicionarequipe()
    {
        $this->form_validation->set_rules('nomeFuncionario', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));
        $this->form_validation->set_rules('cargoFuncionario', 'CARGO', 'required', array('required' => 'O Campo cargo é obrigatório'));


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/equipe';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '3048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('fotoFuncionario')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Por favor, verifique se a imagem está no formato correto e tente novamente.</div>');
                redirect('equipe/adicionarequipe');
            } else {

                $inputAdicionarEquipe['nome_funcionario'] = $this->input->post('nomeFuncionario');
                $inputAdicionarEquipe['cargo_funcionario'] = $this->input->post('cargoFuncionario');
                $inputAdicionarEquipe['ativo'] = $this->input->post('ativo');
                $inputAdicionarEquipe['foto_funcionario'] = $this->upload->data('file_name');


                $this->equipe_model->addEquipe($inputAdicionarEquipe);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Funcionário Adicionado com Sucesso!</div>');
                redirect('equipe', 'refresh');
            }
        } else {


            //Titulo
            $data['titulo_site'] = 'Módulo Equipe';
            $data['titulo_pagina'] = 'Adicionar Funcionário';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addEquip');
            $this->load->view('dashboard/footer');
        }
    }


    public function editarfuncionario($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um funcionário para editar</div>');
            redirect('equipe', 'refresh');
        }

        $query = $this->equipe_model->getEquipe($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Funcionário não encontrado</div>');
            redirect('equipe', 'refresh');
        }

        $this->form_validation->set_rules('nomeFuncionario', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));
        $this->form_validation->set_rules('cargoFuncionario', 'CARGO', 'required', array('required' => 'O Campo cargo é obrigatório'));

        if ($this->form_validation->run() == TRUE) {

            $nome_imagem = NULL;

            //Upload Imagem
            $config['upload_path'] = './upload/equipe';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 3048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('fotoFuncionario')) {
                $nome_imagem = $this->upload->data('file_name');
            }

            $inputEditar['nome_funcionario'] = $this->input->post('nomeFuncionario');
            $inputEditar['cargo_funcionario'] = $this->input->post('cargoFuncionario');
            $inputEditar['ativo'] = $this->input->post('ativo');

            if ($nome_imagem) {
                $inputEditar['foto_funcionario'] = $nome_imagem;
            }

            $this->equipe_model->atualizarEquipe($inputEditar, ['id' => $this->input->post('idFuncionario')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Funcionário atualizado com sucesso!</div>');
            redirect('equipe', 'refresh');
        } else {
            $data['titulo_pagina'] = 'Editar Funcionário';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/editEquip');
            $this->load->view('dashboard/footer');
        }
    }

    public function deletarfuncionario($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um funcionário</div>');
            redirect('equipe', 'refresh');
        }

        $query = $this->equipe_model->getEquipe($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! O Funcionário não foi encontrado</div>');
        }


        $this->equipe_model->deletarEquipe($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Funcionário excluido com sucesso!</div>');
        redirect('equipe', 'refresh');
    }


    public function funcionarioativo($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um funcionário.</div>');
            redirect('equipe', 'refresh');
        }

        $query = $this->equipe_model->getEquipe($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, funcionário não encontrado!</div>');
        }


        $this->equipe_model->atualizarEquipe(['ativo' => 1], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Equipe Atualizada com Sucesso :)</div>');
        redirect('equipe', 'refresh');
    }

    public function funcionarioinativo($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um funcionário.</div>');
            redirect('equipe', 'refresh');
        }

        $query = $this->equipe_model->getEquipe($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, funcionário não encontrado!</div>');
        }


        $this->equipe_model->atualizarEquipe(['ativo' => 0], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Equipe Atualizada com Sucesso :)</div>');
        redirect('equipe', 'refresh');
    }
}
