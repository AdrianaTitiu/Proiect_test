<?php

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
       
    }

    function insert_users()
	{   
		$this->load->view('header');
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('dname', 'username',  'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('dnname', 'name' , 'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('demail', 'email',  'required|valid_email');
		$this->form_validation->set_rules('dpass' , 'password', 'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('dphone', 'phone_number.', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('ddescription', 'description', 'required|min_length[10]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
		{
		}
		else
		{
			$data = array(
				'username' => $this->input->post('dname'),
				'name' => $this->input->post('dnname'),
				'email' => $this->input->post('demail'),
				'password' => $this->input->post('dpass'),
				'phone_Number' => $this->input->post('dphone'),
				'description' => $this->input->post('ddescription')
			);
			$this->users_model->form_insert($data);
		}
		
	    $this->load->view('users_insert');
	}
	
	
	
	function view_users()
	{
		$this->load->view('header');
		$this->load->model('users_model');
		$data['query']=$this->users_model->viewusers();
		$this->load->view('users_view' , $data);
	}
	
	
	
}

?>