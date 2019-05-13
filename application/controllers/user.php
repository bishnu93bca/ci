<?php
/**
 * 
 */
class User extends CI_controller
{
	
	function __construct()
	{
	 parent::__construct();
	 $this->load->library('form_validation');
	 $this->load->helper(array('form', 'url')); 

	}
	public function user_detail()
	{
		$this->load->view('admin/page/user_detail');
		
	}
	public function usertype()
	{
		
		if (isset($_POST['submit'])) {

			$image = $_FILES['upload']['name']; 
			$image_tmp =$_FILES['upload']['tmp_name'];
			move_uploaded_file($image_tmp,"uploads/$image");

			$data = array(
		        'firstname' => $this->input->post('firstname'),
		        'lastname'  => $this->input->post('lastname'),
		        'email' 	=> $this->input->post('email'),
		        'password'	=> $this->input->post('password'),
		        'address'	=> $this->input->post('address'),
		        'upload'	=> $image,
		        'status'	=>	'1'
		    );
			$this->db->insert('user_details', $data);
		}
		$data['query']=$this->db->get('user_details');
		
		$this->load->view('admin/page/usertype',$data);
		

	}
	public function delete(){
		$id=$this->input->get('id');
		$this->db->delete('user_details', array('user_id' => $id)); 
		redirect('/user/usertype', 'refresh');
	}
}

?>
