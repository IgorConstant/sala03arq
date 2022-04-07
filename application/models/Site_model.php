
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site_model extends CI_Model
{


    public function listarBanners()
    {
        return $this->db->get('app_home')->result();
    }

    public function listarEquipe()
    {
        return $this->db->get('app_funcionarios')->result();
    }

    public function listarConteudo()
    {
        return $this->db->get('app_content')->result();
    }
}

/* End of file ModelName.php */
