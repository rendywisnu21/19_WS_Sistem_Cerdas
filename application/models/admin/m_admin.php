<?php
    class M_admin extends CI_Model
    {
        public function getadmin()
        {
            $query = $this->db->get('tb_admin');
            return $query;
        }

        public function getadminlast()
        {
            $this->db->order_by('id_admin', 'DESC');
            return $this->db->get('tb_admin', 1);
        }

        // CREATE
        public function tambah($data)
        {   
            return $this->db->insert('tb_admin', $data);
        }

        // DELETE
        function delete($where, $table)
        {
            $this->db->delete($table, $where);
        }
    }