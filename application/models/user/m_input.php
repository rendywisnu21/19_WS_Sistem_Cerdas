<?php
    class M_input extends CI_Model
    {
        public function rumus_zA($R){
            return 200-($R*(200-100)); 
        }
        public function rumus_zB($R){
            return 300-($R*(300-200)); 
        }
        public function rumus_zC($R){
            return 400-($R*(400-300)); 
        }
        public function rumus_zD($R){
            return 500-($R*(500-400)); 
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
            return $this->db->query( "SELECT * FROM tb_rule 
            JOIN tb_suhu ON tb_suhu.id_suhu=tb_rule.id_suhu 
            JOIN tb_ph ON tb_ph.id_ph=tb_rule.id_ph 
            JOIN tb_tds ON tb_tds.id_tds=tb_rule.id_tds 
            
            WHERE 
            tb_suhu.fuzzy_set= '$suhu' AND
            tb_ph.fuzzy_set= '$ph' AND
            tb_tds.fuzzy_set= '$tds'
            ");
        }
    }
