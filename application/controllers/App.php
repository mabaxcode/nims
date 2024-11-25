<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        $this->load->model('App_model', 'DbApp');

        $this->user_id = $this->session->userdata('user_id');

        if (!$this->session->userdata('user_id')) {
        	redirect();
        }
 
	}

	public function index()
	{	

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		//$data['complete'] = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		$this->load->view('app/dashboard', $data);
	}

	function kemaskiniMaklumat($data=false)
	{	
		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		$data['personal'] = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');
		$data['employment'] = get_any_table_row(array('user_id' => $this->user_id), 'employment_info');

		if ($data['user']['role'] == '2') {
			$data['role'] = "Sister";
		} elseif ($data['user']['role'] == '3') {
			$data['role'] = "Nurse";
		} else {
			$data['role'] = "Admin";
		}

		$this->load->view('app/kemaskini-maklumat', $data);
	}

	function simpanMaklumatPeribadi($data=false)
	{	
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$check = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');

		if ($check == true) {
			$where = array('user_id' => $this->user_id);
			$update = array('no_ic' => $post['no_ic'], 'umur' => $post['umur'], 'bangsa' => $post['bangsa'], 'status' => '1');
			update_any_table($update, $where, 'personal_info');
		} else {
			$insert = array('no_ic' => $post['no_ic'], 'umur' => $post['umur'], 'bangsa' => $post['bangsa'], 'status' => '1', 'user_id' => $this->user_id);
			insert_any_table($insert, 'personal_info');
		}

		$update_user = array('name' => $post['name']);
		update_any_table($update_user, array('id' => $this->user_id), 'user_accounts');

		# personal
		$personal = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');

		# employment
		$employment = get_any_table_row(array('user_id' => $this->user_id), 'employment_info');

		# contact
		$contact = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		if ($personal['status'] == 1 && $employment['status'] == '1' && $contact['status'] == '1') {
			$update = array('complete' => 'Y');
			$where  = array('id' => $this->user_id);
			update_any_table($update, $where, 'user_accounts');
		}

		$response = array('status' => true, 'msg' => 'Maklumat berjaya disimpan !');

		echo encode($response);
	}

	function simpanMaklumatKerja($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$check = get_any_table_row(array('user_id' => $this->user_id), 'employment_info');

		if ($check == true) {

			$where = array('user_id' => $this->user_id);
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
			);
			update_any_table($update, $where, 'employment_info');

		} else {
			// $insert = array('no_ic' => $post['no_ic'], 'umur' => $post['umur'], 'bangsa' => $post['bangsa'], 'status' => '1', 'user_id' => $this->user_id);
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
				'user_id' => $this->user_id,
				'credential' => $post['credential'],
				'tarikh_privilege_start' => $post['tarikh_privilege_start'],
				'tarikh_credential' => $post['tarikh_credential'],
				'tarikh_privilege_end' => $post['tarikh_privilege_end'],
				'status' => '1',
			);

			// echo "<pre>"; print_r($insert); exit;
			// echo "string"; exit;
			insert_any_table($insert, 'employment_info');
		}


		# personal
		$personal = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');

		# employment
		$employment = get_any_table_row(array('user_id' => $this->user_id), 'employment_info');

		# contact
		$contact = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		if ($personal['status'] == 1 && $employment['status'] == '1' && $contact['status'] == '1') {
			$update = array('complete' => 'Y');
			$where  = array('id' => $this->user_id);
			update_any_table($update, $where, 'user_accounts');
		}

		$response = array('status' => true, 'msg' => 'Maklumat berjaya disimpan !');
		echo encode($response);
	}

	function simpanMaklumatKontak($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$where = array('id' => $this->user_id);
		$update = array('email' => $post['email'], 'phone_no' => $post['phone_no'], 'status' => '1');
		update_any_table($update, $where, 'user_accounts');

		# personal
		$personal = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');

		# employment
		$employment = get_any_table_row(array('user_id' => $this->user_id), 'employment_info');

		# contact
		$contact = get_any_table_row(array('id' => $this->user_id), 'user_accounts');

		if ($personal['status'] == 1 && $employment['status'] == '1' && $contact['status'] == '1') {
			$update = array('complete' => 'Y');
			$where  = array('id' => $this->user_id);
			update_any_table($update, $where, 'user_accounts');
		}

		$response = array('status' => true, 'msg' => 'Maklumat berjaya disimpan !');
		echo encode($response);
	}


	function addNewNurse($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$insert = array(
			'name' => $post['name'], 
			'no_kp' => $post['no_kp'], 
			'role' => $post['role'],
			'email' => $post['email'],
			'phone_no' => $post['phone_no'],
			'password' => md5($post['password'])
		);

		insert_any_table($insert, 'user_accounts');

		$response = array('status' => true, 'msg' => 'Pengguna telah berjaya ditambah !');

		echo encode($response);
	}

}
