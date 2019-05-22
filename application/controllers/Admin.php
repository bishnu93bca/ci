<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('web/dash.php');
	}
	public function home()
	{
		$this->load->view('menu/home.php');
	}
	public function aboutus()
	{
		$this->load->view('menu/aboutus.php');
	}
	public function causes()
	{
		$this->load->view('menu/causes.php');
	}
	public function contact()
	{
		$this->load->view('menu/contact.php');
	}
}
