<?php
    class M_hasil extends CI_Model
    {
        public function getHasil()
        {
            $query = $this->db->get('tb_hasil');
            return $query;
        }

		// Hapus
		public function hapus($where, $table)
        {
            $this->db->delete($table, $where);
        }

}		
