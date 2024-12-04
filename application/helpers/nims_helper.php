<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

function load_instance()
{
    $ci =& get_instance();
    return $ci;
}

function isAdmin($user_id)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->where('role', '1');
    $ci->db->where('id', $user_id);
    $query = $ci->db->get('user_accounts');

    if ($query->num_rows() > 0) { return $query->row_array(); }
    return false;
}

function isSister($user_id)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->where('role', '2');
    $ci->db->where('id', $user_id);
    $query = $ci->db->get('user_accounts');

    if ($query->num_rows() > 0) { return $query->row_array(); }
    return false;
}

function isNurse($user_id)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->where('role', '3');
    $ci->db->where('id', $user_id);
    $query = $ci->db->get('user_accounts');

    if ($query->num_rows() > 0) { return $query->row_array(); }
    return false;
}

function get_any_table_row($data_where, $table, $order_latest = false)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->where($data_where);
    if ($order_latest <> false) {
        $ci->db->order_by($order_latest, 'desc');
    }
    $query = $ci->db->get($table);

    if ($query->num_rows() > 0) { return $query->row_array(); }

    return false;
}

function insert_any_table($data_insert, $table)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->insert($table, $data_insert);
    return $ci->db->affected_rows();
}

function update_any_table($data_upd, $data_where, $table)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->set($data_upd);
    $ci->db->where($data_where);
    $ci->db->update($table);
    return $ci->db->affected_rows();
}

function encode($str)
{
    if ($str == "false") {
        $str = array('status' => false);
    }
    if ($str == "true") {
        $str = array('status' => true);
    }
    $return = json_encode($str, JSON_PRETTY_PRINT);
    return $return;
}

function get_any_table_array($data_where = false, $table = false, $col_sort = false, $type_sort = false)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    if($data_where <> false){
        $ci->db->where($data_where);
    }
    
    if ($col_sort <> false) {
        $sort = ($type_sort == false) ? "desc" : $type_sort;
        $ci->db->order_by($col_sort, $sort);
    }
    $query = $ci->db->get($table);

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return false;
    }
}

function get_ref_code($module, $code)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->where(array('code' => $code));
    $ci->db->where(array('module' => $module));
    $query = $ci->db->get('ref_code');

    if ($query->num_rows() > 0) {
        $result = $query->row();
        return $result->code_desc;
    } else {
        return false;
    }
}

function current_date()
{
    $now = date('Y-m-d H:i:s');
    return $now;
}

function get_keytab_value($key)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->where(array('type' => $key));
    $query = $ci->db->get('keytab');

    if ($query->num_rows() > 0) {
        $result = $query->row();
        update_keytab_value($key, $result->key_num);
        return $result->key_num;
    } else {
        return false;
    }
}

function update_keytab_value($key, $val)
{
    $ci = load_instance();
    $ci->load->database();

    $ci->db->set(array('key_num' => $val + 1));
    $ci->db->where(array('type' => $key));
    $ci->db->update('keytab');

    return $ci->db->affected_rows();
}

function delete_any_table($where, $table)
{
    $ci = load_instance();
    $ci->load->database();
    $ci->db->delete($table, $where);
    return $ci->db->affected_rows();
}

function count_any_table($where, $table)
{   
    $ci = load_instance();
    $ci->load->database();

    $ci->db->select('*');
    $ci->db->from($table);
    $ci->db->where($where);
    $query = $ci->db->get();
   
    $row_count = $query->num_rows();
    return $row_count;
    
}






