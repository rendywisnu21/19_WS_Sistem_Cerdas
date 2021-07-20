<?php
    class M_ph extends CI_Model
    {
        public function getPh()
        {
            $query = $this->db->get('tb_ph');
            return $query;
        }

		public function getPhLast()
        {
            $this->db->order_by('id_ph', 'DESC');
            return $this->db->get('tb_ph', 1);
        }

		// Tambah
        public function tambah($data)
        {   
            return $this->db->insert('tb_ph', $data);
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
