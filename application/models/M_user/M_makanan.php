<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_makanan extends CI_Model{
    function get_kategori(){
        $query = $this->db->get('kategoris');
        return $query;
    }

    function get_makanan($id_kategori){
        $query = $this->db->get_where('makanans', array('id_kategori' => $id_kategori));
        return $query;
    }

    function get_chef($id_makanan){
        $query = $this->db->get_where('chef', array('id_makanan' => $id_makanan));
        return $query;
    }
}