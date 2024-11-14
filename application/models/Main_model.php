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
            'no_kp'      => $data['no_kp'], 
            'password'   => md5($data['password']),
        ));
        $query = $this->db->get($this->user_accounts);

        // echo $this->db->last_query(); exit();

        if($query->num_rows() > 0){
        	return $query->row_array();
        } else {
            return false;
        }

	}

    function check_no_ic($where)
    {
        $this->db->select('*');
        $this->db->where($where);
        $query = $this->db->get($this->user_accounts);

        // return $this->db->last_query();

        if($query->num_rows() > 0){
            $response = array('status' => true); 
        } else {
            $response = array('status' => false);
        }

        return $response;

    }

    function insert_users_table($table, $data)
    {   
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }
}
