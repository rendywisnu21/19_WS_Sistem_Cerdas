<?php
    class M_Grade extends CI_Model
    {
        public function getgrade()
        {
            $query = $this->db->get('tb_grade');
            return $query->result();
        }
    }