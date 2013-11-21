<?php
/* 
@Author Adrian Roy Antonio Baguio
@Date 20/11/13
@Desc - added model for blog CRUD
*/
class Blog_model extends CI_Model{

	function insertBlog($userid)
	{
		$this->load->helper('url');

		$data = array(
			'user_id' => $userid,
			'subject' => $this->input->post('inputTitle'),
			'content' => $this->input->post('inputContent'),
			'date' => date("Y-m-d g:i:s", time())
		);

		return $this->db->insert('blog', $data);
		}
	
	
}