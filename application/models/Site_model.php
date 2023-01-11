
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
        $this->db->where('ativo', 1);
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

    public function getProjectInd($id = NULL)
    {
        $this->db->where('id', $id);
        return $this->db->get('app_projects')->result();
    }

    public function getProjectBySlug($slug = NULL)
    {
        $this->db->where('url_seo', $slug);
        return $this->db->get('app_projects')->result();
    }

    public function getGalleryInd($id = NULL)
    {
        $this->db->where('id_app_projects', $id);
        return $this->db->get('app_gallery')->result();
    }
}

/* End of file ModelName.php */
