<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

 function __construct()
 {
   parent::__construct();
 }


   public function index()
	{
	    $this->load->view('include/header');
		$this->load->helper(array('form'));
		$this->load->view('frontpage_view');
		$this->load->view('include/footer');


	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
