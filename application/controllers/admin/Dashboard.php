<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{		
		$this->load->view('admin/includes/_header', array('title'=>'Dashboard2'));
    		$this->load->view('admin/dashboard/index');
    		$this->load->view('admin/includes/_footer');
	}
}
