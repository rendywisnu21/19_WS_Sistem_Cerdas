<?php

class M_parameter extends CI_Model
{
    public function tampil_parameter()
    {
        return $this->db->get('tb_parameter');
    }

    public function getparametersetlast()
    {
        $this->db->order_by('id_parameter', 'DESC');
        return $this->db->get('tb_parameter', 1);
    }

    public function tambah_parameter($parameter)
    {
        return $this->db->insert('tb_parameter', $parameter);
    }

    public function delete_pm($where, $table) 
    {
        $this->db->delete($table, $where);
    }

   
}

?>