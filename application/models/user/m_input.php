<?php
    class M_input extends CI_Model
    {

		public function getHasil()
        {
			$this->db->where('id_hasil', 'DESC');
            return $this->db->get('tb_hasil');
        }

        public function rumus_z($grade,$R){
            if($grade == 'A'){
                return 200-($R*(200-100)); 
            }else if($grade == 'B'){
                return 300-($R*(300-200)); 
            }else if($grade == 'C'){
                return 400-($R*(400-300)); 
            }else if($grade == 'D'){
                return 500-($R*(500-400)); 
            }
        }

        // A = 200-(x*(200-100)); 
        // B = 300-(x*(300-200)) 
        // C = 400-(x*(400-300)) 
        // D = 500-(x*(500-400))

        public function getdata_where($suhu, $ph, $tds){
            return $this->db->query( "SELECT *, 
            tb_suhu.fuzzy_set AS suhu_fuzzyset,
            tb_ph.fuzzy_set AS ph_fuzzyset,
            tb_tds.fuzzy_set AS tds_fuzzyset

            FROM tb_rule 
            JOIN tb_suhu ON tb_suhu.id_suhu=tb_rule.id_suhu 
            JOIN tb_ph ON tb_ph.id_ph=tb_rule.id_ph 
            JOIN tb_tds ON tb_tds.id_tds=tb_rule.id_tds 
            
            WHERE 
            tb_suhu.fuzzy_set= '$suhu' AND
            tb_ph.fuzzy_set= '$ph' AND
            tb_tds.fuzzy_set= '$tds'
            ");
        }

        public function input_db($data){
            $this->db->insert('tb_hasil', $data);
            return $this->db->affected_rows();
        }
    }
