<?php

class M_parameter extends CI_Model
{
    public function tampil_parameter()
    {
        $query = $this->db->get('tb_parameter');
        return $query->result();
    }

   
}

?>