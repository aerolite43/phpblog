
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Register extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model','',TRUE);
 }

	function create()
	{
	$this->load->helper('form');
	$this->load->library('form_validation');

	/* 
		@Author Adrian Roy A Baguio
		@Date 	20/11/13
		@Author Form validation, this will check if the field in register_view is not empty.
	*/
	
	$data['title'] = 'Create User';
	$this->form_validation->set_rules('inputEmail1', 'Email', 'required');
	$this->form_validation->set_rules('inputFirstName', 'First Name', 'required');
	$this->form_validation->set_rules('inputLastName', 'Last Name', 'required');
	$this->form_validation->set_rules('inputPassword', 'Password', 'required');

	if ($this->form_validation->run() === FALSE)
	{
	$this->load->view('include/header');
	
	$this->load->helper('form');
	$this->load->library('form_validation');

    $this->load->view('register_view');
    $this->load->view('include/footer');
   


	}
	else
	{
		$this->user_model->add();
		$this->load->view('include/header', $data);
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->load->view('register_view');
		$this->load->view('include/footer');
	}
	}
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('', 'refresh');
 }
 
 

}

?>

