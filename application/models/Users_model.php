<?php

class Users_model extends CI_Model
{
    function __construct() 
	{
        parent::__construct();
		 
    }
    
	 function form_insert($data)
		{
			print_r($data);
			$this->load->database();
		   $this->db->insert('users', $data);  
		}    
		
	 function viewusers()
	 {
		$this->load->database();
		$query = $this->db->get('users');
		return  $query->result();
	 }
	 
	 
	 
	
	 
 }

?>
