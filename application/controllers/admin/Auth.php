<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('admin/Auth_model', 'auth_model');
	}

	//--------------------------------------------------------------
	public function index()
	{
		$this->load->view('register');
	}

	//--------------------------------------------------------------

	// public function login(){

		
	// }
	//--------------------------------------------------------------
	// public function register(){
	
			
	// }

	//--------------------------------------------------------------
	// public function verify(){

				
	// }

	//--------------------------------------------------		
	// public function forgot_password(){

			
	// }

	//----------------------------------------------------------------		
	// public function reset_password($id=0){

	
	// }

	//-----------------------------------------------------------------------
	// public function logout(){
			
	// }

}
