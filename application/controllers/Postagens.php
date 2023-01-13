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
        $data['titulo_pagina'] = 'Postagens';


        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listPostagens');
        $this->load->view('dashboard/footer');
    }


    public function adicionarpost()
    {


        $this->form_validation->set_rules('tituloPost', 'Titulo Postagem', 'required');
        $this->form_validation->set_rules('textoPostagem', 'Texto Postagem', 'required');


        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'tituloPost' => $this->input->post('tituloPost'),
                'textoPostagem' => $this->input->post('textoPostagem'),
                'dataPostagem' => date('Y-m-d H:i:s'),
                'statusPostagem' => 1,
                'idUsuario' => $this->session->userdata('idUsuario')
            );
        }



        $data['titulo_site'] = 'Módulo Projetos';
        $data['titulo_pagina'] = 'Adicionar Postagens';

        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/addPost');
        $this->load->view('dashboard/footer');
    }
}
