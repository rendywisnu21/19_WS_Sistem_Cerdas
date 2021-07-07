<?php
    class M_Tds extends CI_Model
    {
        public function getTds()
        {
            $query = $this->db->get('tb_tds');
            return $query;
        }

        public function getTdsLast()
        {
            $this->db->order_by('id_tds', 'DESC');
            return $this->db->get('tb_tds', 1);
        }

        // CREATE
        public function tambahtds($data, $table)
        {   
            $query = $this->db->insert($table, $data);
            return $query;
        }

        // DELETE
        function delete($where, $table)
        {
            $this->db->delete($table, $where);
        }
    }
