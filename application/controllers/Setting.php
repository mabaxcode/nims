<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('App_model', 'DbApp'); 
	}

	function index()
	{
		// // $data = $this->input->post();
		// $data['all_nurse'] = $this->DbApp->get_all_nurse();
		// // echo "<pre>"; print_r($data['all_nurse']); echo "</pre>";

		// $data['all_wad'] = $this->DbApp->get_all_wad();

		// $this->load->view('app/senarai-semua-nurse', $data);
	}


	function senaraiSister($data=false)
	{
		$data['sister']  = $this->DbApp->get_all_sister();

		$data['all_wad'] = $this->DbApp->get_all_wad();

		$data['all_nurse'] = $this->DbApp->get_all_nurse();

		$this->load->view('app/senarai-semua-sister', $data);

	}

	function addNewSister($data=false)
	{
		$post = $this->input->post();


		$check = get_any_table_row(array('wad_id' => $post['wad']), 'sister');

		if ($check == true) {
			echo encode(array('status' => false, 'msg' => 'Sister telah ada dalam wad ini !'));
			exit;
		}

		// echo "<pre>"; print_r($post); echo "</pre>";

		// update role
		update_any_table(array('role' => '2'), array('id' => $post['nurse']), 'user_accounts');

		// insert in sister table
		$insert_data = array('nurse_id' => $post['nurse'], 'wad_id' => $post['wad']);

		$insert_process = insert_any_table($insert_data, 'sister'); 




		if ($insert_process == true) {
			echo encode(array('status' => true, 'msg' => 'Sister Berjaya Ditambah !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Gagal Untuk Tambah Sister !'));
		}

	}

	function tukarWad($data=false)
	{		
		$nurse_id = $this->input->post('id');

		$data['nurse'] = get_any_table_row(array('id' => $nurse_id), 'user_accounts');

		$data['nurse_id'] = $nurse_id;


		$current_wad = get_any_table_row(array('nurse_id' => $nurse_id), 'sister');

		$data['current_wad'] = $current_wad['wad_id'];

		$data['all_wad'] = $this->DbApp->get_all_wad();

		$this->load->view('app/modal-tukar-wad', $data);
	}

	function doTukarWad($data=false)
	{
		$post = $this->input->post();

		$nurse_id = $post['nurse_id'];
		$wad = $post['wad'];

		$check = get_any_table_row(array('wad_id' => $wad, 'nurse_id !=' => $nurse_id), 'sister');

		if ($check == true) {
			echo encode(array('status' => false, 'msg' => 'Sister telah ada dalam wad ini !'));
			exit;
		}

		$do_update = update_any_table(array('wad_id' => $wad), array('nurse_id' => $nurse_id), 'sister');

		
		echo encode(array('status' => true, 'msg' => 'Berjaya Tukar !'));
		
		
		// echo "<pre>"; print_r($post); echo "</pre>";	
	}
}
