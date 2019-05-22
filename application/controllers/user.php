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
	public function Sub_menue()
	{
		$this->load->view('admin/page/sub_menue');
		
	}
	public function menue()
	{
		$this->load->view('admin/page/menue');
		
	}
	public function about_us()
	{
		$this->load->view('admin/page/about_us');
		
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
   



// --------------------------------Web Setting-------------//

	public function web_setting()
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
			$this->db->insert('web_setting', $data);
		}
		$data['query']=$this->db->get('web_setting');
		
		$this->load->view('admin/page/web_setting',$data);
		

	}
	public function web_delete(){
		$id=$this->input->get('id');
		$this->db->delete('web_setting', array('user_id' => $id)); 
		redirect('/user/web_setting', 'refresh');
	}



}

?>
