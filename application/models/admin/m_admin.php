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

        // Tambah
        public function tambah($data)
        {   
            return $this->db->insert('tb_admin', $data);
        }

        // Hapus
		public function hapus($where, $table)
        {
            $this->db->delete($table, $where);
        }
    }
