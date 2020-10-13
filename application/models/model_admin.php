<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('idposko',$key);
		$hasil = $this->db->get('posko');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('idposko',$key);
		$this->db->update('posko',$data);
	}
	public function getinsert($data)
	{
		$this->db->insert('posko',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('idposko',$key);
		$this->db->delete('idposko');
	}
}
