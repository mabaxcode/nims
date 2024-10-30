<?php

class Main_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->user_accounts = "user_accounts";
    }

    function check_user_login($data)
	{
		$this->db->select('*');
        $this->db->where(array(
            'login_id'   => $data['login_id'], 
            'password'   => md5($data['password']),
        ));
        $query = $this->db->get($this->user_accounts);

        if($query->num_rows() > 0){
        	$response = array( 'status' => true, 'data' => $query->row_array() ); 
        } else {
        	$response = array('status' => false, 'msg' => 'Its look like your username or password is incorrect.');
        }

        return $response;

	}
}
