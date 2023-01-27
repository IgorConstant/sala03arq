<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postagens_model extends CI_Model
{

    public function listarPostagens()
    {
        return $this->db->get('app_postagens')->result();
    }

    public function addPostagens($data = NULL)
    {
        if (is_array($data)) {
            $this->db->insert('app_postagens', $data);
        }
    }
}
