<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        $this->load->model('Main_model', 'DbMain');

        if ($this->session->userdata('user_id')) {
        	redirect('app');
        }
 
	}
	
	public function index()
	{
		$this->load->view('main');
	}
}
