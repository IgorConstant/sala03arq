<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    public function listarProjetos()
    {
        return $this->db->get('app_projects')->result();
    }
}
