<?php
class User_model extends CI_Model{
	
	/* @author: Adrian Roy Antonio
	   @date: 15/11/2013
	   @description list all of users model
	*/
	function fetchAccounts()
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		
		/*
			@author: Adrian Roy Baguio
			@date: 18/11/2013
			@desc: Order them by ID so it looks good! 
		*/
		$this->db->group_by('id'); 
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
			return $data;
		}
		return false;
	}
	
	function login($email_address, $password)
	{
	   $this -> db -> select('*');
	   $this -> db -> from('users');
	   $this -> db -> where('email_address', $email_address);
	   //$this -> db -> where('password', MD5($password));
	   $this -> db -> where('password', $password);
	   $this -> db -> limit(1);
	
	   $query = $this->db->get();
	   
	   if($query->num_rows() == 1)
	   {
		return $query->result();
	   }
	   else
	   {
		return false;
	   }


	}
	
	function delete($userid)
	{
		//$this->db->delete('user', array('id' => $userid));
		$this->db->where("id", $this->example_id);
        $this->db->delete("users");
	}
	
	/*
	@author Adrian Roy Baguio
	@date 19/11/2013
	@description Function that will add users
	*/
	function add()
	{
		$this->load->helper('url');

		$data = array(
			'email_address' => $this->input->post('inputEmail1'),
			'first_name' => $this->input->post('inputFirstName'),
			'last_name' => $this->input->post('inputLastName'),
			'password' => $this->input->post('inputPassword')
		);

		return $this->db->insert('users', $data);
		}
	
}
?>