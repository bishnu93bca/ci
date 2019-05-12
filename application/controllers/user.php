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

			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('userfile')){

                $error = array('error' => $this->upload->display_errors());
                
            }else{

                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_success', $data);
            }

			$data = array(
		        'firstname' => $this->input->post('firstname'),
		        'lastname'  => $this->input->post('lastname'),
		        'email' 	=> $this->input->post('email'),
		        'password'	=> $this->input->post('password'),
		        'address'	=> $this->input->post('address'),
		        'upload'	=> '',
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
