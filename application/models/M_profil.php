<?php
class M_profil extends CI_Model{
    function add($data)
    {
        return $this->db->insert('profil',$data);
    }
}