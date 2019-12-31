<?php

class User_model extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    function get_field_value_condition($table_name, $displaycolumn_name, $wherearr) {
        $this->db->select($displaycolumn_name);
        $arr = $this->db->get_where($table_name, $wherearr)->result_array();
        if (isset($arr[0])) {
            return $arr[0][$displaycolumn_name];
        } else {
            return "";
        }
    }

    function validate_username($username) {
        $this->db->select('id');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('status', '1');

        $data = $this->db->get();

        $num = $data->num_rows();

        if ($num == 1) {
            $result = $data->result_array();
            if (isset($result[0])) {
                return $result[0]['id'];
            }
        } else {
            return '';
        }
    }

    function validate_user($username, $password) {
        $this->db->select('id');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->or_where('mobile', $username);
        $this->db->where('password', $password);
        $this->db->where('status', '1');

        $data = $this->db->get();

        $num = $data->num_rows();

        if ($num == 1) {
            $result = $data->result_array();
            if (isset($result[0])) {
                return $result[0]['id'];
            }
        } else {
            return '';
        }
    }

    function get_validated_user_details($user_id) {
        $this->db->select('theme.main_theme,first_name,last_name,username,email,mobile,user_type.user_type');
        $this->db->from('user');
        $this->db->join('user_type', 'user_type.ID = user.user_type', 'left');
        $this->db->join('theme', 'theme.user_id = user.id', 'left');
        $this->db->where('user.id', $user_id);
        $result = $this->db->get()->result_array();

        if (isset($result[0])) {
            return $result[0];
        } else {
            return '';
        }
    }

}
