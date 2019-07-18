<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_order extends CI_Model{    
    function get_order($id_chef){
        $query = $this->db->get_where('orders', array('id_chef' => $id_chef));
        return $query ;
        // $query = SELECT makanans.id_makanan, makanans.nama_makanan, chef.id_chef, chef.nama_chef
        // FROM makanans, chef
        // WHERE makanans.id_makanans=chef.id_chef;
    }

    function get_chef($id_chef){
        $query = $this->db->get_where('chef', array('id_chef' => $id_chef));
        return $query ;
    }
}