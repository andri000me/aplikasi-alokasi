<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_bantuan extends CI_Model {

	public function get_bantuan(){
		return $this->db->get('bantuan')->result();
	}

	public function add_bantuan(){
		$data = [
			'jenis_bantuan' => $this->input->post('jenis_bantuan'),
			'jumlah_bantuan' => $this->input->post('jumlah_bantuan'),

		];

		$this->db->insert('bantuan', $data);
	}

	public function edit_bantuan(){
		$data = [
					'jenis_bantuan' => $this->input->post('jenis_bantuan'),
			'jumlah_bantuan' => $this->input->post('jumlah_bantuan'),
		];

		$this->db->where('id_bantuan', $this->input->post('id_bantuan'));
		$this->db->update('bantuan', $data);
	}


	public function hapus_bantuan($id){
			$this->db->where('id_bantuan', $id);
		$this->db->delete('bantuan');
	}
}

