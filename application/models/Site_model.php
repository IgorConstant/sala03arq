
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site_model extends CI_Model
{


    public function listarBanners()
    {
        return $this->db->get('app_home')->result();
    }
}

/* End of file ModelName.php */
