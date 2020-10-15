<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk','p');
	}
	public function index()
	{
		$data['all'] = $this->p->semua();
		$data['pages'] = "admin/pages/produk/data";
		$this->load->view('admin/index',$data);
	}
	public function baru()
	{
		if ($this->input->method() === "post") 
		{
			$this->p->tambah();
			$this->session->set_flashdata('info','Data baru telah ditambahkan');
			return redirect('app/produk');
		}
		$data['pages'] = "admin/pages/produk/add";
		$this->load->view('admin/index',$data);
	}
	public function edit($id)
	{
		if ($this->input->method() === "post") 
		{
			$this->p->update($id);
			$this->session->set_flashdata('info','Data telah diperbarui');
			return redirect('app/produk');
		}
		$data['edit'] = $this->p->edit($id);
		$data['pages'] = "admin/pages/produk/edit";
		$this->load->view('admin/index',$data);
	}
	public function hapus($id)
	{
		$this->p->hapus($id);
		$this->session->set_flashdata('info','Data telah dihapus');
		return redirect('app/produk');
	}
}
