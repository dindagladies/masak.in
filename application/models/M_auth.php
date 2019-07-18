<?php
class M_auth extends CI_Model{
    public function ct_login($where)
    {
        # code...
        return $this->db->get_where('user', $where);
    }

    public function ct_email($email){
       $this->db->where('email',$email);
       $query = $this->db->get('user');
       if ($query->num_rows() > 0) {
           # code...
           return true;
       } else {
           return false;
       }
    }

    public function reg_user($data){
        return $this->db->insert('user',$data);
    }

    public function get_user($where){
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('email', $where);
        return $this->db->get();
    }
}