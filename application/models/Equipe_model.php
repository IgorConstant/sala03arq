<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipe_model extends CI_Model
{

    public function listarEquipe()
    {
        return $this->db->get('app_funcionarios')->result();
    }


    public function addEquipe($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_funcionarios', $dados);
        }
    }

    public function getEquipe($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_funcionarios')->row();
        }
    }


    public function deletarEquipe($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_funcionarios', ['id' => $id]);
        }
    }


    public function atualizarEquipe($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_funcionarios', $dados, $condicao);
        }
    }
}
