<?php

class App_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->user_accounts = "user_accounts";
    }


    function get_all_nurse()
    {
        $this->db->select('*');
        $this->db->where_in('role',['3','2']);
        $this->db->where('active', '1');
        $query = $this->db->get($this->user_accounts);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function get_all_wad()
    {
        $this->db->select('*');
        $this->db->where('module','wad');
        $query = $this->db->get('ref_code');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }  

    function get_all_hapus_nurse()
    {
        $this->db->select('*');
        $this->db->where_in('role',['2','3']);
        $this->db->where('active', '0');
        $query = $this->db->get($this->user_accounts);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }  


    function get_all_sister()
    {
        $this->db->select('*');
        $this->db->where_in('role',['2']);
        $this->db->where('active', '1');
        $query = $this->db->get($this->user_accounts);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function checking_user_password($password, $user_id)
    {
        $this->db->select('id');
        $this->db->where('id', $user_id);
        $this->db->where('password', $password);
        $query = $this->db->get('user_accounts');
    
        if($query->num_rows() > 0){ return $query->row_array(); }
        return false;
    }
}
