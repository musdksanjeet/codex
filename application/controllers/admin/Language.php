<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/includes/_header', array('title'=>'Language Setting'));
    	$this->load->view('admin/setting/language_setting');
    	$this->load->view('admin/includes/_footer');
	}
}