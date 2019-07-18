<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_makanan extends CI_Model {
	
	function edit($where,$data)
	{
		$this->db->where('id_makanan',$where);
		$this->db->update('makanans',$data);
	}
	
	function delete($id)
	{
		$this->db->where('id_makanan',$id);
		$this->db->delete('makanans');
	}

	function show()
	{
		$this->db->select('makanans.*,kategoris.id_kategori, kategoris.nama_kategori');
		$this->db->from('makanans');
		$this->db->join('kategoris','kategoris.id_kategori = makanans.id_kategori','LEFT');
		return $this->db->get();
	}
	
	function add($data)
	{
		$this->db->insert('makanans',$data);
	}
	function show_kategori(){
		$this->db->select('*');
		$this->db->from('kategoris');
		return $this->db->get();
	}

	function showByid($id)
	{
		$this->db->select('*');
		$this->db->from('makanans');
		$this->db->where('id_makanan',$id);
		return $this->db->get();
	}
}
