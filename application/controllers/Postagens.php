<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Postagens extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }

        $this->load->model('postagens_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }


    public function index()
    {
        $this->listarposts();
    }


    public function listarposts()
    {
        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Postagens';
        $data['app_posts'] = $this->postagens_model->listarPostagens();


        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listPostagens');
        $this->load->view('dashboard/footer');
    }

    public function adicionarpostagem()
    {

        $this->form_validation->set_rules('tituloPost', 'Titulo Postagem', 'required', array('required' => 'O Campo Título da Postagem é obrigatório!'));


        if ($this->form_validation->run() == TRUE) {

            $data['titulo_postagem'] = $this->input->post('tituloPost');

            $this->load->library('upload');

            $config1 = array(
                'upload_path' => "./upload/posts/",
                'allowed_types' => "pdf|doc|docx|ppt|pptx",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config1);
            if ($this->upload->do_upload('anexoPostagem')) {
                echo "Anexo enviado com sucesso!";
                $data['anexo'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }


            $config2 = array(
                'upload_path' => "./upload/posts/",
                'allowed_types' => "jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config2);
            if ($this->upload->do_upload('fotoDestaque')) {
                echo "Destaque enviado com sucesso!";
                $data['imagem_destaque'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $this->postagens_model->addPostagens($data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Postagem adicionada com sucesso!</div>');
            redirect('postagens', 'refresh');

        } else {

            $data['titulo_site'] = 'Gerenciador';
            $data['titulo_pagina'] = 'Postagens';


            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addPost');
            $this->load->view('dashboard/footer');
        }
    }
}
