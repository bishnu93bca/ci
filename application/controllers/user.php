<?php
/**
 * 
 */
class User extends CI_controller
{
	
	function __construct()
	{
	 parent::__construct();

	}
	public function user_detail()
	{
		$this->load->view('admin/page/user_detail');
		
	}
	public function usertype()
	{
		$this->load->view('admin/page/usertype');
	}
}

?>