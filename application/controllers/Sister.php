<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sister extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('App_model', 'DbApp'); 

        $this->user_id = $this->session->userdata('user_id');
	}

	// function index()
	// {
	// 	// $data = $this->input->post();
	// 	$data['all_nurse'] = $this->DbApp->get_all_nurse();
	// 	// echo "<pre>"; print_r($data['all_nurse']); echo "</pre>";

	// 	$data['all_wad'] = $this->DbApp->get_all_wad();

	// 	$this->load->view('app/senarai-semua-nurse', $data);
	// }

	function wadSelian($data=false)
	{	

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		$sister = get_any_table_row(array('nurse_id' => $data['user']['id']), 'sister');

		$data['wad_selian'] = get_ref_code('wad', $sister['wad_id']);


		$data['total_nurse_selian'] = count_any_table(array('wad' => $sister['wad_id']), 'employment_info');

		$data['nurse_list'] = get_any_table_array(array('wad' => $sister['wad_id']), 'employment_info');

		$this->load->view('app/senarai-semua-selian', $data);
	}
}
