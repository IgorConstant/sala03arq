<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{

    public function listarProjetos()
    {
        return $this->db->get('app_projects')->result();
    }


    public function criarProjeto($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_projects', $dados);
        }
    }

    public function getProjectID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_projects')->row();
        }
    }

    public function apagarProjeto($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_projects', ['id' => $id]);
        }
    }

    public function atualizarProjetos($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_projects', $dados, $condicao);
        }
    }


}
