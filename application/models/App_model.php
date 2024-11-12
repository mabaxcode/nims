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
        $this->db->where_in('role',['2','3']);
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

}
