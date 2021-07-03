<?php
    class M_fuzzy extends CI_Model
    {
        public function getFuzzy()
        {
            $query = $this->db->get('tb_fuzzyset');
            return $query;
        }

        public function getFuzzyLast()
        {
            $this->db->order_by('id_fuzzyset', 'DESC');
            return $this->db->get('tb_fuzzyset', 1);
        }

        // Tambah
        public function tambah($data)
        {   
            return $this->db->insert('tb_fuzzyset', $data);
        }

		// Hapus
		public function hapus($data){
			$this->db->where('id_fuzzyset', $data['id_fuzzyset']);   
			$this->db->delete('tb_fuzzyset');  
		}

    }
