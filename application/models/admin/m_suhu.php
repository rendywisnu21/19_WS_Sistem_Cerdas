<?php
    class M_Suhu extends CI_Model
    {
        public function getSuhu()
        {
            $query = $this->db->get('tb_suhu');
            return $query;
        }

		public function getSuhuLast()
        {
            $this->db->order_by('id_suhu', 'DESC');
            return $this->db->get('tb_suhu', 1);
        }

		// Tambah
        public function tambah($data)
        {   
            return $this->db->insert('tb_suhu', $data);
        }
		
		// Hapus
		public function hapus($where, $table)
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
