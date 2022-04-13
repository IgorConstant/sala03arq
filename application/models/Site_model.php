
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

    public function listarProjetos()
    {
        return $this->db->get('app_projects')->result();
    }

    public function visualizarProjeto($id)
    { 
        if($id){
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_projects');
        }
    }
}

/* End of file ModelName.php */
