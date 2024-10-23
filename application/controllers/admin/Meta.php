<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/includes/_header', array('title'=>'Meta Setting'));
    	$this->load->view('admin/setting/meta_setting');
    	$this->load->view('admin/includes/_footer');
	}
}