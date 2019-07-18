<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {

    function show()
	{
		$this->db->select('*');
		$this->db->from('orders');
		return $this->db->get();
	}

	function showBydate($bulan){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where(['created_at'=>$bulan,'status' => 'pending']);
		return $this->db->get();
	}

	function showBydateandClear($where){
		return $this->db->get_where('orders',$where);
	}
}