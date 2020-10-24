<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_alokasi extends CI_Model {

	public function get_alokasi(){
		return $this->db->get('alokasi')->result();
	}

public function get_alokasi_admin(){
		return  $this->db->query("
            SELECT * from posko
           

            WHERE posko.status = 'menunggu alokasi'
            ")->result();
	}

	public function add_alokasi(){
		$data = [
			'id' => $this->session->userdata('id'),
			'nm_alokasi' => $this->input->post('nm_alokasi'),
			'id_posko' => $this->input->post('id_posko'),
			'nama_bantuan' => $this->input->post('nama_bantuan'),
			'jumlah_bantuan' => $this->input->post('jumlah_bantuan'),
			'tgl_alokasi' => date('Y-m-d'),
		];

		$this->db->insert('alokasi', $data);




	}

	public function update_posko(){
			$data1 = [
			'status' => 'menunggu distribusi'
		];


		$this->db->where('id_posko', $this->input->post('id_posko'));
		$this->db->update('posko', $data1);




	}




	public function edit_alokasi(){
		$data = [
			'id' => $this->session->userdata('id'),
			'nm_alokasi' => $this->input->post('nm_alokasi'),
			'id_posko' => $this->input->post('id_posko'),
			'id_bantuan' => $this->input->post('id_bantuan'),
			
		];

		$this->db->where('id_alokasi', $this->input->post('id_alokasi'));
		$this->db->update('alokasi', $data);
	}


	public function hapus_alokasi($id){
			$this->db->where('id_alokasi', $id);
		$this->db->delete('alokasi');
	}
}

