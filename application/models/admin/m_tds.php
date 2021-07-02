<?php
    class M_Tds extends CI_Model
    {
        public function gettds()
        {
            $query = $this->db->query('SELECT * FROM tb_tds, tb_kategori WHERE tb_tds.id_kategori = tb_kategori.id_kategori');
            return $query;
        }

        public function getkat()
        {
            $query = $this->db->get('tb_kategori');
            return $query;
        }

        public function gettdslast()
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