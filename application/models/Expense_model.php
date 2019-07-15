<?php

class Expense_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function createExpense($param)
    {
        $this->db->insert('expense', $param);
        $id = $this->db->insert_id();
        return $id;
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
    function getAllEmi()
    {
        $this->db->select('*');
        $this->db->from('loan_master');
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
    
    function markInstallmentPaid($param, $instaid)
    {
        $this->db->where('id', $instaid);
        $this->db->update('loan_details', $param);
        $affected_rows = $this->db->affected_rows();
        return $affected_rows;
    }
    
    
}
