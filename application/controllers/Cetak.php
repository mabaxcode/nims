<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('App_model', 'DbApp'); 
	}

	function index()
	{
		// $data = $this->input->post();
		$data['all_nurse'] = $this->DbApp->get_all_nurse();
		// echo "<pre>"; print_r($data['all_nurse']); echo "</pre>";

		$data['all_wad'] = $this->DbApp->get_all_wad();

		$this->load->view('app/senarai-semua-nurse', $data);
	}
}
