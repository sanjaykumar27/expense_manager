<?php

class Expense_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insertSingleTable($tablename,$params)
    {
        $this->db->insert($tablename, $param);
        $id = $this->db->insert_id();
        return $id;
    }
    
    function getAllRecord($tableName)
    {
        $this->db->select('*');
        $this->db->from($tableName);
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }

    function updateField($tableName, $field, $row, $param)
    {
        $this->db->where($field, $row);
        $this->db->update($tableName, $param);
        $affected_rows = $this->db->affected_rows();
        return $affected_rows;
    }

    function getCategoryList($catid)
    {
        $this->db->select('*');
        $this->db->from('collections');
        $this->db->where('collections.collectiontype_id',$catid);
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }

    function getEmiMasterDetail()
    {
        $this->db->select('*');
        $this->db->from('loan_master');
        $this->db->join('collections','collections.id = loan_master.paid_via','left');
        $result = $this->db->get()->result_array();
        if (isset($result[0])) {
            return $result[0];
        } else {
            return '';
        }
    }
    
    function getInstallmentList($emi_id)
    {
        $this->db->select('*');
        $this->db->from('loan_details');
        $this->db->where('loan_details.loan_id',$emi_id);
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }
    
    function checkInstallmentStatus($loan_id)
    {
        $this->db->select('loan_master.no_of_emi, count(loan_details.status) as loan_paid');
        $this->db->from('loan_master');
        $this->db->join('loan_details','loan_details.loan_id = loan_master.id','left');
        $this->db->where('loan_master.id',$loan_id);
        $this->db->where('loan_details.status',1);
        $result = $this->db->get()->result_array();
        if (isset($result[0])) {
            return $result[0];
        } else {
            return '';
        }
    }
    
}
