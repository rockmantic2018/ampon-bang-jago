<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model
{
	function semua()
	{
		return $this->db->order_by('id_produk','desc')->get('tb_produk')->result();
	}
	function tambah()
	{
		$config['upload_path'] = 'uploads/portfolio/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $hasil=$this->upload->data();
		if ($hasil['file_name'] == '') 
		{
			$data = array(
				'nama'		=>	$this->input->post('nama'),
				'sub_nama'	=>	$this->input->post('sub'),
				'link_demo'	=>	$this->input->post('link')
			);
		}
		else
		{
			$data = array(
				'nama'		=>	$this->input->post('nama'),
				'sub_nama'	=>	$this->input->post('sub'),
				'link_demo'	=>	$this->input->post('link'),
				'gambar'	=>	$hasil['file_name']
			);
		}
		$this->db->insert('tb_produk',$data);
	}
	function edit($id)
	{
		return $this->db->get_where('tb_produk',array('id_produk'=>$id))->row();
	}
	function update($id)
	{
		$config['upload_path'] = 'uploads/portfolio/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $hasil=$this->upload->data();
		if ($hasil['file_name'] == '') 
		{
			$data = array(
				'nama'		=>	$this->input->post('nama'),
				'sub_nama'	=>	$this->input->post('sub'),
				'link_demo'	=>	$this->input->post('link')
			);
		}
		else
		{
			$data = array(
				'nama'		=>	$this->input->post('nama'),
				'sub_nama'	=>	$this->input->post('sub'),
				'link_demo'	=>	$this->input->post('link'),
				'gambar'	=>	$hasil['file_name']
			);
		}
		$this->db->where('id_produk',$id);
		$this->db->update('tb_produk',$data);
	}
	function hapus($id)
	{
		$this->db->where('id_produk',$id);
		$this->db->delete('tb_produk');
	}
}
