<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();       
        $this->load->model('Home_model','home_model');
        
    }

    public function index()
    {
         $data['results'] = $this->home_model->getTyres();
        $this->load->view('home', $data);
    }   
}
