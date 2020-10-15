<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$data['pages'] = "admin/pages/home";
		$this->load->view('admin/index',$data);
	}
}
