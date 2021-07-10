<?php
    class M_home extends CI_Model
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


        // A = 200-(x*(200-100)); 
        // B = 300-(x*(300-200)) 
        // C = 400-(x*(400-300)) 
        // D = 500-(x*(500-400))
    }
