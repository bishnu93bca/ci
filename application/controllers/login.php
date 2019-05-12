<?php

class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function verify()
	{
		$this->load->model('admin');
		$check= $this->admin->validate();
		if($check)
		{
			redirect('dashboard');
		}
		else{
			redirect('#');
		}
	}
}


?>