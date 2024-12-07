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

		$data['emp'] = get_any_table_row(array('user_id' => $this->user_id), 'employment_info');

		$data['get_my_sister'] = get_any_table_row(array('wad_id' => $data['emp']['wad']), 'sister');

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
			$update = array('umur' => $post['umur'], 'bangsa' => $post['bangsa'], 'status' => '1');
			update_any_table($update, $where, 'personal_info');
		} else {
			$insert = array('umur' => $post['umur'], 'bangsa' => $post['bangsa'], 'status' => '1', 'user_id' => $this->user_id);
			insert_any_table($insert, 'personal_info');
		}

		$update_user = array('name' => $post['name'], 'no_kp' => $post['no_kp']);
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
				'jawatan' => $post['jawatan'],
				'gred' => $post['gred'],
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
				'jawatan' => $post['jawatan'],
				'gred' => $post['gred'],
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
			'password' => md5($post['password']),
			'active' => '1',
		);

		insert_any_table($insert, 'user_accounts');

		$response = array('status' => true, 'msg' => 'Pengguna telah berjaya ditambah !');

		echo encode($response);
	}

	function statistic_nurse($data=false)
	{	
		
		//$nurse = get_any_table_row(array('user_id' => $this->session->userdata('user_id')), 'staff_details');

		$allwad = get_any_table_array(array('module' => 'wad'), 'ref_code');

		$data_wad = [];

		foreach ($allwad as $key) {

			$wad_id     = $key[$key['code']];

			$countNurse = count_any_table(array('wad' => $key['code']), 'employment_info');

			$statisticData[] = array(
				'country' => $key['code_desc'],
				'visits'  => $countNurse,
			);

		}

		header('Content-Type: application/json');

		echo json_encode($statisticData);

		/*

	
		$month = array('01','02','03','04','05','06','07','08','09','10','11','12');

		$monthNames = array(
		    '01' => 'January',
		    '02' => 'February',
		    '03' => 'March',
		    '04' => 'April',
		    '05' => 'May',
		    '06' => 'June',
		    '07' => 'July',
		    '08' => 'August',
		    '09' => 'September',
		    '10' => 'October',
		    '11' => 'November',
		    '12' => 'December'
		);

		$currentYear  = date('Y');

		$countriesData = [];

		foreach ($month as $key) {

			$trans = $this->DbWallet->get_trans_this_month($staffdata['staff_id'], $key, $currentYear);

			if ( !$trans) {
				$trans = 0;
			}

			$countriesDatax[] = array(
				'country' => $monthNames[$key],
				'visits'  => $trans,
			);


		}

		header('Content-Type: application/json');

		// Example server-side data (this could be from a database query)
		// $countriesData = [
		//     ["country" => "US", "visits" => 1],
		//     ["country" => "UK", "visits" => 4],
		// ];

		// echo "<pre>"; print_r($countriesData); echo "</pre>"; exit;

		// Output the data as JSON
		echo json_encode($countriesDatax);

		*/

	}

	function myProfile($data=false)
	{
		$data['profile'] = get_any_table_row(array('id' => $this->user_id), 'user_accounts');	

		$this->load->view('app/my-profile', $data);
	}

	function setting($data=false)
	{
		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'user_accounts');	

		$this->load->view('app/my-setting', $data);
	}

	public function updateProfile($data=false)
	{
		// code...
		$post = $this->input->post();

	    $update_profile = array(
	    	'name' => $post['name'],
	    	'phone_no' => $post['phone_no']
	    );

	    $whereUser = array('id' => $this->user_id );


	    update_any_table($update_profile, $whereUser, 'user_accounts');

        
		// echo "<pre>"; print_r($post); echo "</pre>";

	
		// echo "<pre>"; print_r($_FILES['avatar']); echo "</pre>"; exit();

	    $response = array('status' => true, 'msg' => 'Berjya Kemaskini !' );
	    echo encode($response);

	}

	function updateEmail($data=false)
	{
		$post = $this->input->post();

	    $update_profile = array(
	    	'email' => $post['email']
	    );

	    $whereUser = array('id' => $this->user_id );


	    $update_process = update_any_table($update_profile, $whereUser, 'user_accounts');

	    if ($update_process == true) {
	    	// code...
	    	$response = array('status' => true, 'msg' => 'Email telah dikemaskini !' );
	    	echo encode($response);
	    }else{
	    	$response = array('status' => false, 'msg' => 'Gagal untuk kemaskini !' );
	    	echo encode($response);
	    }

	    
	}

	function change_password($data=false)
	{
		$post        = $this->input->post();
		$currentPass = md5($post['currentpassword']);
		$newPass     = $post['newpassword'];
		$confirmPass = $post['confirmpassword'];

		// echo $currentPass; exit;

		$is_password = $this->DbApp->checking_user_password($currentPass, $this->user_id);

		if ($is_password == true) {
			$data_upd   = array('password' => md5($newPass));
			$data_where = array('id' => $this->user_id, 'password' => $currentPass);
			update_any_table($data_upd, $data_where, 'user_accounts');

			$response = array('status' => true, 'msg' => 'Katalaluan berjaya ditukar');
		} else {
			$response = array('status' => false, 'msg' => 'Gagal untuk menukar Katalaluan');
		}
		echo encode($response);
		exit;
	}

	function count_nurse_under_sister()
    {   

    	$sister = get_any_table_row(array('nurse_id' => $this->user_id), 'sister');

    	// $data['total'] = count_any_table(array('wad' => $sister['wad_id'], 'user_id !=' => $this->user_id), 'employment_info');


    	$total_all = get_any_table_array(array('wad' => $sister['wad_id'], 'user_id !=' => $this->user_id), 'employment_info');

    	$jumlah_lengkap = 0;
    	$jumlah_xlengkap = 0;

    	foreach($total_all as $key){

    		$nurse_seliaan_id = $key['user_id'];

    		$user_accounts = get_any_table_row(array('id' => $nurse_seliaan_id), 'user_accounts');


    		if ($user_accounts['complete'] == "Y") {
    			// code...
    			$jumlah_lengkap = $jumlah_lengkap + 1;
    		}

    	}

    	foreach($total_all as $key){

    		$nurse_seliaan_id_x = $key['user_id'];

    		$user_accounts_x = get_any_table_row(array('id' => $nurse_seliaan_id_x), 'user_accounts');


    		if ($user_accounts_x['complete'] <> "Y") {
    			// code...
    			$jumlah_xlengkap = $jumlah_xlengkap + 1;
    		}

    	}


        $lengkap   		= $jumlah_lengkap;
        $tidak_lengkap  = $jumlah_xlengkap;

        // $response = array('series' => [$male, $female]);
        // echo encode($response);

        // Simulate fetching data
		$data = [$lengkap, $tidak_lengkap];

		// Output as JSON
		header('Content-Type: application/json');
		echo json_encode($data);
    }

}
