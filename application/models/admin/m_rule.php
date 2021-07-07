<?php
    class M_rule extends CI_Model
    {
        public function getrule()
        {
            $this->db->join('tb_suhu', 'tb_rule.id_suhu = tb_suhu.id_suhu');
            $this->db->join('tb_ph', 'tb_rule.id_ph = tb_ph.id_ph');
            $this->db->join('tb_tds', 'tb_rule.id_tds = tb_tds.id_tds');
            $this->db->select('*, tb_suhu.fuzzy_set as fuzzy_set_suhu, tb_ph.fuzzy_set as fuzzy_set_ph, tb_tds.fuzzy_set as fuzzy_set_tds');
            $this->db->from('tb_rule');
            return $this->db->get();
        }

        public function getsuhu()
        {
            return $this->db->get('tb_suhu');
        }

        public function getph()
        {
            return $this->db->get('tb_ph');
        }

        public function gettds()
        {
            return $this->db->get('tb_tds');
        }

        // CREATE
        public function tambah($data)
        {   
            return $this->db->insert('tb_rule', $data);
        }

        // Hapus
		public function hapus($where, $table)
        {
            $this->db->delete($table, $where);
        }
    }
