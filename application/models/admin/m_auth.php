<?php
    class M_auth extends CI_Model
    {
        public function get_data($data)
        {
            return $this->db->get_where('tb_admin', $data);
        }
    }
?>    
