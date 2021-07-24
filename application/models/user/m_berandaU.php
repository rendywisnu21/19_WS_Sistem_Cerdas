<?php

class M_berandau extends CI_Model
{
    public function get_beranda()
    {
        $sql = $this->db->query("SELECT tb_rule.rule, tb_suhu.fuzzy_set AS Suhu, tb_ph.fuzzy_set AS pH, tb_tds.fuzzy_set AS TDS, grade AS grade FROM tb_rule JOIN tb_suhu, tb_ph, tb_tds WHERE tb_rule.id_suhu = tb_suhu.id_suhu AND tb_rule.id_ph = tb_ph.id_ph AND tb_rule.id_tds = tb_tds.id_tds");
        return $sql;
    }

    public function get_rule()
    {
       return $this->db->get('tb_rule');
    }

    public function get_suhu()
    {
       return $this->db->get('tb_suhu');
    }

    public function get_ph()
    {
        return $this->db->get('tb_ph');
    }

    public function get_tds()
    {
        return $this->db->get('tb_tds');
    }
}

?>