<?php
	class Profile extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','',TRUE);
		
		/* @author Adrian Roy Baguio
		   @date 18/11/2013
		   @description Added language so someone can translate the code in different language in the future.
		   
		*/
		$this->lang->load('main', 'english');
	}
	
	 function index()
	{
	   
	   $this->load->helper('url');
	   $this->load->view('include/header');
	   
	   $session_data = $this->session->userdata('logged_in');
	   
	   if($this->session->userdata('logged_in') &&  $session_data['level'] == 1)
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['query'] = $this->user_model->fetchAccounts();
		 $this->load->view('profile_view',$data);
		 $this->load->view('include/footer');
	   }
	   else
	   {
		 //If no session, redirect to login page
		 //redirect('', 'refresh');
		 
		 $this->load->view('permission_view');
		 $this->load->view('include/footer');
	   }
	}
	
	/* 
	@author Adrian
	@date 18/11/2013
	@description Function that will delete a profile.
	*/
	
	function delete()
	{
		$example_id = $this->uri->segment(3);
        $this->db->where("id", $example_id);
        $this->db->delete("users");
		
		/* 
		@author Adrian
		@date 18/11/2013
		@description add message when the user gets disconnected
		@using flashdata to load message once the function gets executed.
		@there should be if statement to check wheather notice variable is set or not.
		*/
		$this->session->set_flashdata('notice', '<p>User has been sucessfully deleted.</p>' );
		
        redirect(base_url('index.php/profile/'));
	}
	}
?>