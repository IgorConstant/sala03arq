<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeria_model extends CI_Model
{

    public function listarGalerias()
    {
        return $this->db->get('app_gallery')->result();
    }

    public function multipleImages($image = array())
    {
        return $this->db->insert_batch('app_gallery', $image);
    }

    
}
