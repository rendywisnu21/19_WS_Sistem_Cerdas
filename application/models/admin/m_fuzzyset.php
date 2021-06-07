<?php
    class M_Fuzzyset extends CI_Model
    {
        public function getfuzzyset()
        {
            $query = $this->db->get('tb_fuzzyset');
            return $query;
        }

        public function getfuzzysetlast()
        {
            $this->db->order_by('id_fuzzyset', 'DESC');
            return $this->db->get('tb_fuzzyset', 1);
        }

        // CREATE
        public function tambahfzs($fuzzy)
        {   
            return $this->db->insert('tb_fuzzyset', $fuzzy);
        }

        // DELETE
        function delete($where, $table)
        {
            $this->db->delete($table, $where);
        }
    }