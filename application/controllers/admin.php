<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'tampil_posko';
		$isi['judul'] = 'Data Posko';
		$isi['data'] = $this->db->get('posko');
		$this->load->view('page_admin',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content'] 	= 'admin/input_datauser';
		$isi['judul'] 		= 'Input Data User';
		$isi['user']		= '';
		$isi['nama']		= '';
		$isi['kec']			= '';
		$isi['saldo']		= '';
		$isi['point']		= '';
		$this->load->view('admin/tampilan_home',$isi);
	}
	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']		= 'admin/input_datauser';
		$isi['judul'] 		= 'Edit Data User';

		$key = $this->uri->segment(3);
		$this->db->where('user',$key);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['user']	= $row->user;
				$isi['nama']	= $row->nama;
				$isi['kec']		= $row->kec;
				$isi['saldo']	= $row->saldo;
				$isi['point']	= $row->point;
			}
		}
		else 
		{
			$isi['user']			= '';
			$isi['nama']			= '';
			$isi['kec']				= '';
			$isi['saldo']			= '';
			$isi['point']			= '';
		}
		$this->load->view('admin/tampilan_home',$isi);
	}
	public function simpan()
	{
		$this->model_security->getsecurity();	
		$key 				= $this->input->post('user');
		$data['user'] 		= $this->input->post('user');
		$data['nama'] 		= $this->input->post('nama');
		$data['kec'] 		= $this->input->post('kec');
		$data['saldo'] 		= $this->input->post('saldo');
		$data['point'] 		= $this->input->post('point');
		$this->load->model('model_user');
		$query = $this->model_user->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_user->getupdate($key,$data);
			$this->session->set_flashdata('info','data sukses diupdate');
		}
		else 
		{
			$this->model_user->getinsert($data);
			$this->session->set_flashdata('info','data sukses disimpan');
		}
		redirect('user/tambah');
	}
	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_user');
		$key = $this->uri->segment(3);
		$this->db->where('user',$key);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) 
		{
			$this->model_user->getdelete($key);
		}
		redirect('user');
	}
}