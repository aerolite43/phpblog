
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->view('include/header');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 
	 
     $data['username'] = $session_data['username'];
	 $data['first_name'] = $session_data['first_name'];
	 $data['last_name'] = $session_data['last_name'];
	 $data['level'] = $session_data['level'];
	 
	 
     $this->load->view('home_view', $data);
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

