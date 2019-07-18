<?php
class M_profile extends CI_Model{
    function add($data)
    {
        return $this->db->insert('profil',$data);
    }

}