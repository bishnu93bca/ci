<?php
/**
 * 
 */
class dashboard extends CI_controller
{
	
	function __construct()
	{
	 parent::__construct();

	}
	public function index()
	{
		$this->load->view('admin/page/dashboard');
	}
}

?>