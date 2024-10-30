<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        $this->load->model('App_model', 'DbApp');

        if ($this->session->userdata('user_id')) {
        	redirect('app');
        }
 
	}

	public function index()
	{	
		$this->load->view('app/dashboard');
	}
}
