<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editdetails extends CI_Controller {

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

	function editFor($id)
	{
		$data['personal'] = get_any_table_row(array('user_id' => $id), 'personal_info');
        $data['employment'] = get_any_table_row(array('user_id' => $id), 'employment_info');
        $data['user'] = get_any_table_row(array('id' => $id), 'user_accounts');

        $data['nurse_id'] = $id;

        if ($data['user']['role'] == '2') {
			$data['role'] = "Sister";
		} elseif ($data['user']['role'] == '3') {
			$data['role'] = "Nurse";
		} else {
			$data['role'] = "Admin";
		}

		$this->load->view('app/edit-detail-nurse', $data);
	}

	function simpanMaklumatPeribadiAdmin($data=false)
	{	
		$post = $this->input->post();

		$nurse_id = $post['nurse_id'];

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$check = get_any_table_row(array('user_id' => $nurse_id), 'personal_info');

		if ($check == true) {
			$where = array('user_id' => $nurse_id);
			$update = array(
				'umur' => $post['umur'], 
				'bangsa' => $post['bangsa'], 
				'status' => '1', 
				'address1' => $post['address1'],
				'address2' => $post['address2'],
				'postcode' => $post['postcode'],
				'state' => $post['state'],
				'city' => $post['city'],
				'person_status' => $post['person_status'],
			);
			update_any_table($update, $where, 'personal_info');
		} else {
			$insert = array(
				'umur' => $post['umur'], 
				'bangsa' => $post['bangsa'], 
				'status' => '1', 
				'user_id' => $nurse_id,
				'address1' => $post['address1'],
				'address2' => $post['address2'],
				'postcode' => $post['postcode'],
				'state' => $post['state'],
				'city' => $post['city'],
				'person_status' => $post['person_status'],
			);
			insert_any_table($insert, 'personal_info');
		}

		$update_user = array('name' => $post['name'], 'no_kp' => $post['no_ic']);
		update_any_table($update_user, array('id' => $nurse_id), 'user_accounts');

		# personal
		$personal = get_any_table_row(array('user_id' => $nurse_id), 'personal_info');

		# employment
		$employment = get_any_table_row(array('user_id' => $nurse_id), 'employment_info');

		# contact
		$contact = get_any_table_row(array('id' => $nurse_id), 'user_accounts');

		if ($personal['status'] == 1 && $employment['status'] == '1' && $contact['status'] == '1') {
			$update = array('complete' => 'Y');
			$where  = array('id' => $nurse_id);
			update_any_table($update, $where, 'user_accounts');
		}

		$response = array('status' => true, 'msg' => 'Maklumat berjaya disimpan !');

		echo encode($response);
	}

	function simpanMaklumatKerjaAdmin($data=false)
	{
		$post = $this->input->post();

		$nurse_id = $post['nurse_id'];

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$check = get_any_table_row(array('user_id' => $nurse_id), 'employment_info');

		if ($check == true) {

			$where = array('user_id' => $nurse_id);
			$update = array(
				'wad' => $post['wad'], 
				'tarikh_lantikan' => $post['tarikh_lantikan'], 
				'tarikh_naik_pangkat' => $post['tarikh_naik_pangkat'],
				'tarikh_bersara' => $post['tarikh_bersara'],
				'no_ljm' => $post['no_ljm'],
				'tarikh_lapor_diri' => $post['tarikh_lapor_diri'],
				'pos_basik_1' => $post['pos_basik_1'],
				'tarikh_basik1' => $post['tarikh_basik1'],
				'pos_basik_2' => $post['pos_basik_2'],
				'tarikh_basik2' => $post['tarikh_basik2'],
				'pos_basik_3' => $post['pos_basik_3'],
				'tarikh_basik3' => $post['tarikh_basik3'],
				'credential' => $post['credential'],
				'tarikh_privilege_start' => $post['tarikh_privilege_start'],
				'tarikh_credential' => $post['tarikh_credential'],
				'tarikh_privilege_end' => $post['tarikh_privilege_end'],
				'status' => '1',
				'jawatan' => $post['jawatan'],
				'gred' => $post['gred'],
			);
			update_any_table($update, $where, 'employment_info');

		} else {
			// $insert = array('no_ic' => $post['no_ic'], 'umur' => $post['umur'], 'bangsa' => $post['bangsa'], 'status' => '1', 'user_id' => $nurse_id);
			$insert = array(
				'wad' => $post['wad'], 
				'tarikh_lantikan' => $post['tarikh_lantikan'], 
				'tarikh_naik_pangkat' => $post['tarikh_naik_pangkat'],
				'tarikh_bersara' => $post['tarikh_bersara'],
				'no_ljm' => $post['no_ljm'],
				'tarikh_lapor_diri' => $post['tarikh_lapor_diri'],
				'pos_basik_1' => $post['pos_basik_1'],
				'tarikh_basik1' => $post['tarikh_basik1'],
				'pos_basik_2' => $post['pos_basik_2'],
				'tarikh_basik2' => $post['tarikh_basik2'],
				'pos_basik_3' => $post['pos_basik_3'],
				'tarikh_basik3' => $post['tarikh_basik3'],
				'user_id' => $nurse_id,
				'credential' => $post['credential'],
				'tarikh_privilege_start' => $post['tarikh_privilege_start'],
				'tarikh_credential' => $post['tarikh_credential'],
				'tarikh_privilege_end' => $post['tarikh_privilege_end'],
				'status' => '1',
				'jawatan' => $post['jawatan'],
				'gred' => $post['gred'],
			);

			// echo "<pre>"; print_r($insert); exit;
			// echo "string"; exit;
			insert_any_table($insert, 'employment_info');
		}


		# personal
		$personal = get_any_table_row(array('user_id' => $nurse_id), 'personal_info');

		# employment
		$employment = get_any_table_row(array('user_id' => $nurse_id), 'employment_info');

		# contact
		$contact = get_any_table_row(array('id' => $nurse_id), 'user_accounts');

		if ($personal['status'] == 1 && $employment['status'] == '1' && $contact['status'] == '1') {
			$update = array('complete' => 'Y');
			$where  = array('id' => $nurse_id);
			update_any_table($update, $where, 'user_accounts');
		}

		$response = array('status' => true, 'msg' => 'Maklumat berjaya disimpan !');
		echo encode($response);
	}

	function simpanMaklumatKontakAdmin($data=false)
	{
		$post = $this->input->post();

		$nurse_id = $post['nurse_id'];

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$where = array('id' => $nurse_id);
		$update = array(
			'email' => $post['email'], 
			'phone_no' => $post['phone_no'], 
			'status' => '1',
			'nama_waris1' => $post['nama_waris1'],
			'nama_waris2' => $post['nama_waris2'],
			'no_kp_waris1' => $post['no_kp_waris1'],
			'no_kp_waris2' => $post['no_kp_waris2'],
			'no_tel_waris1' => $post['no_tel_waris1'],
			'no_tel_waris2' => $post['no_tel_waris2'],
		);
		update_any_table($update, $where, 'user_accounts');

		# personal
		$personal = get_any_table_row(array('user_id' => $nurse_id), 'personal_info');

		# employment
		$employment = get_any_table_row(array('user_id' => $nurse_id), 'employment_info');

		# contact
		$contact = get_any_table_row(array('id' => $nurse_id), 'user_accounts');

		if ($personal['status'] == 1 && $employment['status'] == '1' && $contact['status'] == '1') {
			$update = array('complete' => 'Y');
			$where  = array('id' => $nurse_id);
			update_any_table($update, $where, 'user_accounts');
		}

		$response = array('status' => true, 'msg' => 'Maklumat berjaya disimpan !');
		echo encode($response);
	}
}
