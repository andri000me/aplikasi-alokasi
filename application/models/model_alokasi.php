<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_alokasi extends CI_Model {

	public function get_alokasi(){
		return $this->db->get('alokasi')->result();
	}

	public function add_alokasi(){
		$data = [
			'id' => $this->session->userdata('id'),
			'nm_alokasi' => $this->input->post('nm_alokasi'),
			'id_posko' => $this->input->post('id_posko'),
			'id_bantuan' => $this->input->post('id_bantuan'),
			'tgl_diajukan' => date('Y-m-d'),
			'tgl_alokasi' => date('Y-m-d'),
		];

		$this->db->insert('alokasi', $data);
	}

	public function edit_alokasi(){
		$data = [
			'id' => $this->session->userdata('id'),
			'nm_alokasi' => $this->input->post('nm_alokasi'),
			'id_posko' => $this->input->post('id_posko'),
			'id_bantuan' => $this->input->post('id_bantuan'),
			'tgl_diajukan' => $this->input->post('tgl_diajukan'),
			'tgl_alokasi' => $this->input->post('tgl_alokasi'),
		];

		$this->db->where('id_alokasi', $this->input->post('id_alokasi'));
		$this->db->update('alokasi', $data);
	}


	public function hapus_alokasi($id){
			$this->db->where('id_alokasi', $id);
		$this->db->delete('alokasi');
	}
}

