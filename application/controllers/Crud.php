<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Crud_Model','crud_model');
	}

	public function index()
	{
		$results['data']=$this->crud_model->display_records();
		$this->load->view('display_records',$results);
	}

	public function savedata()
	{
	 
	    $this->load->library('form_validation');

	    // Set validation rules
	    $this->form_validation->set_rules('first_name', 'First Name', 'required');
	    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		// Run validation
	    if ($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('insert');
	    }else
	    {	        
	        $array_data = array(
	            'first_name' => $this->input->post('first_name'),
	            'last_name' => $this->input->post('last_name'),
	            'email' => $this->input->post('email')
	        );

	       
	        // Save data to the model
	        $response = $this->crud_model->saverecords($array_data);

	        if ($response == true)
	        {
	             redirect('crud/index');
	        }
	        else
	        {
	            echo "Insert error!";
	        }
	    }
	}


		
}
