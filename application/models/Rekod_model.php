<?php

class Rekod_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->user_accounts = "user_accounts";
    }


    function get_all_complete_nurse()
    {
        $this->db->select('*');
        $this->db->where('complete', 'Y');
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

    public function dt_search_nurse($requestData)
    {
        $this->_dt_search_nurse_query($requestData);

        if ($requestData['length'] != -1)
            $this->db->limit($requestData['length'], $requestData['start']);

        $query = $this->db->get();
        // print_r($this->db->last_query());
        // exit;
        return $query->result_array();
    }

    private function _dt_search_nurse_query($requestData)
    {
        $this->db->select('*');
        $this->db->from('user_accounts');
        //$this->db->join('job', 'user_accounts.id = form.form_id');
        $this->db->where('user_accounts.complete', 'Y');
        $this->db->where_in('role',['2','3']);
        //$this->db->where('user_accounts.job_status', 'A');
        // $this->db->order_by('user_accounts.create_dt', 'DESC');

        # search
        if (!empty($requestData['inpt_data']) && isset($requestData['inpt_data'])) {
            $this->db->group_start();
            $this->db->like('passport', $requestData['inpt_data']);
            $this->db->or_like('passport_old', $requestData['inpt_data']);
            $this->db->or_like('fullname', $requestData['inpt_data']);
            $this->db->group_end();
        }
        if (!empty($requestData['inpt_pass_type']) && isset($requestData['inpt_pass_type'])) {
            $this->db->where('pass_type', $requestData['inpt_pass_type']);
        }
        
    }

    public function count_all_cancel($requestData)
    {
        $this->_dt_search_nurse_query($requestData);

        return $this->db->count_all_results();
    }

    public function count_filtered_cancel($requestData)
    {
        $this->_dt_search_nurse_query($requestData);
        $query = $this->db->get();

        return $query->num_rows();
    }  

}
