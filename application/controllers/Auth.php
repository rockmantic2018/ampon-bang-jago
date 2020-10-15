<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id_admin_webtuan')) {
			return redirect('app/home');
		}
	}
	public function index()
	{
		if ($this->input->method() === "post") 
		{
			$username = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$query  = $this->db->get_where('tb_user',array('email'=>$username,'password'=>$password));

			if ($query->num_rows() > 0) 
			{
				$row = $query->row();
				$this->session->set_userdata('id_admin_webtuan',$row->id_user);
				return redirect('app/home');
			}
			else
			{
				$this->session->set_flashdata('info','Username atau password anda salah');
				return redirect('auth');
			}
		}
		$this->load->view('login');
	}
}
