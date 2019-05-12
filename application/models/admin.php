<?php
/**
 * 
 */
class Admin extends CI_model
{
	
	public function validate()
	{
		$arr['email']=$this->input->post('email');
		$arr['password']=$this->input->post('password');
		return $this->db->get_where('admin',$arr)->row();
	}
}
?>