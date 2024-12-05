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

	function editJawatan($data=false)
	{
		$id = $this->input->post('id');

		$data['ref_data'] = get_any_table_row(array('id' => $id, 'module' => 'jawatan'), 'ref_code');

		$data['label'] = "Jawatan";


		$this->load->view('app/modal-edit-ref-code', $data);
	}

	function editGred($data=false)
	{
		$id = $this->input->post('id');

		$data['ref_data'] = get_any_table_row(array('id' => $id, 'module' => 'gred'), 'ref_code');

		$data['label'] = "Gred";


		$this->load->view('app/modal-edit-ref-code', $data);
	}

	function editWad($data=false)
	{
		$id = $this->input->post('id');

		$data['ref_data'] = get_any_table_row(array('id' => $id, 'module' => 'wad'), 'ref_code');

		$data['label'] = "Wad";


		$this->load->view('app/modal-edit-ref-code', $data);
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

	function jawatan($data=false)
	{	
		$data['jawatan'] = get_any_table_array(array('module' => 'jawatan'), 'ref_code');
		$this->load->view('app/senarai-semua-jawatan', $data);
	}

	function gred($data=false)
	{	
		$data['gred'] = get_any_table_array(array('module' => 'gred'), 'ref_code');
		$this->load->view('app/senarai-semua-gred', $data);
	}

	function wad($data=false)
	{	
		$data['wad'] = get_any_table_array(array('module' => 'wad'), 'ref_code');
		$this->load->view('app/senarai-semua-wad', $data);
	}

	function doEditRefCode($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		update_any_table(array('code_desc' => $post['code_desc']), array('id' => $post['id']), 'ref_code');

		echo encode(array('status' => true, 'msg' => 'Berjaya Disimpan !'));
	}

	function addNewJawatan($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$code_id = get_keytab_value('jawatan');

		$insert_data = array('module' => 'jawatan', 'code' => $code_id, 'code_desc' => strtoupper($post['name']));

		$insert_process = insert_any_table($insert_data, 'ref_code');

		if ($insert_process == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Jawatan Telah Berjaya Ditambah !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Untuk Menambah Jawatan !'));
		}
	}

	function addNewGred($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$code_id = get_keytab_value('gred');

		$insert_data = array('module' => 'gred', 'code' => $code_id, 'code_desc' => strtoupper($post['name']));

		$insert_process = insert_any_table($insert_data, 'ref_code');

		if ($insert_process == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Gred Telah Berjaya Ditambah !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Untuk Menambah Gred !'));
		}
	}

	function addNewWad($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$code_id = get_keytab_value('wad');

		$insert_data = array('module' => 'wad', 'code' => $code_id, 'code_desc' => strtoupper($post['name']));

		$insert_process = insert_any_table($insert_data, 'ref_code');

		if ($insert_process == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Wad Telah Berjaya Ditambah !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Untuk Menambah Wad !'));
		}
	}

	function hapusJawatan($data=false)
	{
		$delete = delete_any_table(array('id' => $this->input->post('id'), 'module' => 'jawatan'), 'ref_code');

		if ($delete == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Jawatan Telah Berjaya Dihapus !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Untuk Menghapus Jawatan !'));
		}
	}

	function hapusSister($data=false)
	{
		$nurse_id = $this->input->post('id');

		$update_user_table = update_any_table(array('role' => '3'), array('id' => $nurse_id), 'user_accounts');

		$delete_sister = delete_any_table(array('nurse_id' => $nurse_id), 'sister');

		if ($delete_sister == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Sister Telah Berjaya Dihapus !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Dihapus !'));
		}


	}

	function hapusGred($data=false)
	{
		$delete = delete_any_table(array('id' => $this->input->post('id'), 'module' => 'gred'), 'ref_code');

		if ($delete == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Gred Telah Berjaya Dihapus !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Untuk Menghapus Gred !'));
		}
	}

	function hapusWad($data=false)
	{
		$delete = delete_any_table(array('id' => $this->input->post('id'), 'module' => 'wad'), 'ref_code');

		if ($delete == true) {
			// code...
			echo encode(array('status' => true, 'msg' => 'Wad Telah Berjaya Dihapus !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal Untuk Menghapus Wad !'));
		}
	}
}
