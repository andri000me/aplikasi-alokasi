<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_korlap extends CI_Model {

	public function get_korlap(){
		return $this->db->get_where('user', ['level'=>'korlap'])->result();
	}


	public function add_korlap(){
		$data = [
			'name' => $this->input->post('nm_korlap'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => 'korlap'
		];

		$this->db->insert('user', $data);




	}

	public function update_posko(){
			$data1 = [
			'status' => 'menunggu distribusi'
		];


		$this->db->where('id_posko', $this->input->post('id_posko'));
		$this->db->update('posko', $data1);




	}




	public function edit_korlap(){
	$data = [
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			
		];


		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}


	public function hapus_korlap($id){
			$this->db->where('id', $id);
		$this->db->delete('user');
	}
}

