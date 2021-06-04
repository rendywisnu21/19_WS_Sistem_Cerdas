<?php
    class M_Fuzzyset extends CI_Model
    {
        public function getfuzzyset()
        {
            $query = $this->db->get('tb_fuzzyset');
            return $query->result();
        }
    }