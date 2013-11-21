
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Myblog extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('blog_model','',TRUE);
   $this->load->helper('form');
   $this->load->library('form_validation');
   
   // Keep the session goin
    if($this->session->userdata('logged_in'))
   {
   // Make a global variable
   $this->SESSION_DATA = $this->session->userdata('logged_in');
   }
 }

 function share()
 {
 	$data['result'] = "";
	$this->form_validation->set_rules('inputTitle', 'Title', 'required');
	$this->form_validation->set_rules('inputContent', 'Content', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$data['result'] = "Something goes wrong with the validation.";
		$this->load->view('include/header');

		$this->load->view('blog_view',$data);
		$this->load->view('include/footer');
	
	}
	else
	{
		$data['result'] = "Comment has been added.";
		$this->blog_model->insertBlog($this->SESSION_DATA['id']);
		$this->load->view('include/header');

		$this->load->view('blog_view', $data);
		$this->load->view('include/footer');
	}
 
 }

 function index()
 {
	$data['result'] = "";
   $this->load->view('include/header');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 
     $data['username'] = $session_data['username'];
	 $data['first_name'] = $session_data['first_name'];
	 $data['last_name'] = $session_data['last_name'];
	 $data['level'] = $session_data['level'];
	 
     $this->load->view('blog_view', $data);
	 $this->load->view('include/footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
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

