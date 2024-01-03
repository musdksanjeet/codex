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
		$data['title'] = 'Dashboard1';
		$this->load->view('admin/includes/_header', array('title'=>'Dashboard1'));
    	$this->load->view('admin/dashboard/index', $data);
    	$this->load->view('admin/includes/_footer');
	}

	public function index2()
	{
		$data['title'] = 'Dashboard2';
		$this->load->view('admin/includes/_header', array('title'=>'Dashboard2'));
    	$this->load->view('admin/dashboard/index2', $data);
    	$this->load->view('admin/includes/_footer');
	}

	public function index3()
	{
		$data['title'] = 'Dashboard2';
		$this->load->view('admin/includes/_header', array('title'=>'Dashboard3'));
    	$this->load->view('admin/dashboard/index3', $data);
    	$this->load->view('admin/includes/_footer');
	}

}