<?php
    class M_admin extends CI_Model
    {
        public function getadmin()
        {
            $this->db->where('role', '0');
            return $this->db->get('tb_admin');
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
        function delete($id)
        {
            return $this->db->delete('tb_admin', array('id_admin'=>$id));
        }
    }