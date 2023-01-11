<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Conteudo_model extends CI_Model
{
    //Listar os Logos Cadastrados
    public function listarConteudo()
    {
        return $this->db->get('app_content')->result();
    }


    public function criarConteudo($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_content', $dados);
        }
    }

    public function getConteudoID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_content')->row();
        }
    }

    public function atualizarConteudo($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_content', $dados, $condicao);
        }
    }
}
