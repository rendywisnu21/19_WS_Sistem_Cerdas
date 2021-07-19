<?php

class M_berandaU extends CI_Model
{
    public function get_beranda()
    {
        //$sql = $this->db->query("SELECT rule FROM tb_rule");
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
        //$sql = $this->db->query("SELECT tb_suhu.fuzzy_set FROM tb_suhu, tb_rule WHERE tb_rule.id_suhu = tb_suhu.id_suhu ORDER BY id_rule");
        //return $sql;
    }

    public function get_ph()
    {
        return $this->db->get('tb_ph');
        //$sql = $this->db->query("SELECT tb_ph.fuzzy_set FROM tb_ph, tb_rule WHERE tb_rule.id_ph = tb_ph.id_ph ORDER BY id_rule");
        //return $sql;
    }

    public function get_tds()
    {
        return $this->db->get('tb_tds');
        //$sql = $this->db->query("SELECT tb_tds.fuzzy_set FROM tb_tds, tb_rule WHERE tb_rule.id_tds = tb_tds.id_tds ORDER BY id_rule");
        //return $sql;
    }
}

?>