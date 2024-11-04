<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        $this->load->model('Main_model', 'DbMain'); 
	}

	/*
	function create_account_process($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit();
		$data_insert = array(
			'name' 	 	 => $data['name'],
			'email'  	 => $data['email'],
			'username' 	 => $data['username'],
			'password' 	 => md5($data['password']),
			'created_at' => curr_dt(),
			'active' 	 => '1'
		);
		$insert = $this->main->insert_user_accounts($this->user_accounts, $data_insert);

		$where  = array('username' => $data['username'], 'password' => md5($data['password']), 'active' => '1');

		if ($insert == true) {
			$user_accounts = get_any_table_row($where, $this->user_accounts);
			// print_r($data['roles']); exit();

			if ($user_accounts == true){
				$assign_role = roles_attachment($data['roles'], $user_accounts['id']);
				$response    = array('status' => true, 'msg' => 'Account has been successfully created !');

			} else {
				$response = array('status' => true, 'msg' => 'Failed to assign role !');
			}

		} else {
			$response = array('status' => false, 'msg' => 'Something when wrong !');
		}

		echo encode($response);
		exit();
	}
	*/

	function login_process($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit;
		
		$user_login = $this->DbMain->check_user_login($data);

		if ($user_login == false) {

			$this->session->set_flashdata('info', 'Its look like your username or password is incorrect.');
			redirect();

		} else {

			$sess_data = array(
				'user_id' 	=> $user_login['id'],
				'name' 	  	=> $user_login['name'],
				'login_id' 	=> $user_login['login_id'],
				'email' 	=> $user_login['email']
			);

			$this->session->set_userdata($sess_data);
			// print_r($sess_data); exit;

			redirect('app');
		}

	}

	function logout()
	{
	    $this->session->sess_destroy();
	    redirect();
	}
}
