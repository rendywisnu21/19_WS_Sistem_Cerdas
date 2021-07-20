<?php
    class M_tds extends CI_Model
    {
        public function getTDS()
        {
            $query = $this->db->get('tb_tds');
            return $query;
        }

        public function getTDSLast()
        {
            $this->db->order_by('id_tds', 'DESC');
            return $this->db->get('tb_tds', 1);
        }

        // Tambah
        public function tambah($data)
        {   
            return $this->db->insert('tb_tds', $data);
        }

        // Hapus
        public function delete($where, $table)
        {
            $this->db->delete($table, $where);
        }

		// Edit
		public function edit($where, $table, $nilai)
		{		
			$hasil = $this->db->update($table, $nilai, $where);
			return $hasil;
		}
    }
