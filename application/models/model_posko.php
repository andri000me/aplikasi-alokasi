<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_posko extends CI_Model {

	public function get_posko(){
		return $this->db->get('posko')->result();
	}

	public function get_posko_admin(){
		return $this->db->get_where('posko', ['status' => 'menunggu alokasi'])->result();
	}

	public function add_posko(){
		$data = [
			'nm_posko' => $this->input->post('nm_posko'),
			'bencana' => $this->input->post('bencana'),
			'jumlah_korban' => $this->input->post('jumlah_korban'),
			'kondisi' => $this->input->post('kondisi'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'alamat_posko' => $this->input->post('alamat_posko'),
			'status' => "menunggu alokasi",
			'id' => $this->session->userdata('id'),
			'tanggal' => date('Y-m-d'),
		];

		$this->db->insert('posko', $data);
	}

	public function edit_posko(){
		$data = [
			'nm_posko' => $this->input->post('nm_posko'),
			'bencana' => $this->input->post('bencana'),
			'jumlah_korban' => $this->input->post('jumlah_korban'),
			'kondisi' => $this->input->post('kondisi'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'alamat_posko' => $this->input->post('alamat_posko')		
		];

		$this->db->where('id_posko', $this->input->post('id_posko'));
		$this->db->update('posko', $data);
	}


	public function hapus_posko($id){
			$this->db->where('id_posko', $id);
		$this->db->delete('posko');
	}
}

