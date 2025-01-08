<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Senaraijururawat extends CI_Controller {

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

	function hapusPengguna($data=false)
	{
		$id = $this->input->post('id');

		// echo $id; exit;

		$update = array('active' => '0');

		$where = array('id' => $id);

		$update_process = update_any_table($update, $where, 'user_accounts');

		if ($update_process == true) {
			echo encode(array('status' => true, 'msg' => 'Pengguna berjaya dinyahaktifkan !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal untuk hapus pengguna !'));
		}

	}

	function hapus($data=false)
	{	
		$data['all_nurse'] = $this->DbApp->get_all_hapus_nurse();

		$this->load->view('app/senarai-nurse-dihapus', $data);
	}

	function aktifkanPengguna($data=false)
	{
		$id = $this->input->post('id');

		// echo $id; exit;

		$update = array('active' => '1');

		$where = array('id' => $id);

		$update_process = update_any_table($update, $where, 'user_accounts');

		if ($update_process == true) {
			echo encode(array('status' => true, 'msg' => 'Pengguna berjaya diaktifkan !'));
		} else {
			echo encode(array('status' => true, 'msg' => 'Gagal untuk aktifkan pengguna !'));
		}
	}
}
