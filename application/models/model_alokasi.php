<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_alokasi extends CI_Model {

	public function get_alokasi(){
		return $this->db->get('alokasi')->result();
	}

}

