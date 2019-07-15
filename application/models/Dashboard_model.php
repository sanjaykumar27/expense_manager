<?php

class Dashboard_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insertData($param,$tbl)
    {
        $this->db->insert($tbl, $param);
        $id = $this->db->insert_id();
        return $id;
    }

    function getPaymentMode(){
        $this->db->select('*');
        $this->db->from('account_master');
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }
    
    function getCategories($catid){

        $this->db->select('categories.category_name,'
                . 'categories.id as cat_id,'
                . 'sub_categories.subcategory_name,'
                . 'sub_categories.id as sub_id');
        $this->db->from('categories');
        $this->db->join('sub_categories', 'sub_categories.category_id = categories.id', 'left');
        if($catid > 0){
            $this->db->where('sub_categories.category_id',$catid);
        }
        $this->db->order_by('sub_categories.subcategory_name');
        $this->db->order_by('categories.category_name');
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }
    
    function getCategoriesList(){
        $this->db->select('categories.category_name,categories.id');
        $this->db->from('categories');
        $this->db->order_by('categories.category_name');
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }
    
    function createCategory($param){
        $this->db->insert('categories', $param);
        $id = $this->db->insert_id();
        return $id;
    }
    
    function createSubCategory($param){
        $this->db->insert('sub_categories', $param);
        $id = $this->db->insert_id();
        return $id;
    }

    function getExpenseList($userid)
    {
         $this->db->select('expense.id,expense.user_id,expense.category_id,expense.quantity,expense.unit,'
                 . 'expense.purchase_date,expense.remark,expense.amount,expense.remark,'
                 . 'expense.receipt_url,'
                 . 'categories.category_name,'
                . 'categories.id as cat_id,'
                . 'sub_categories.subcategory_name,'
                . 'sub_categories.id as sub_id,'
                 . 'collections.name');
        $this->db->from('expense');
        $this->db->join('sub_categories', 'sub_categories.id = expense.category_id', 'left');
        $this->db->join('categories', 'categories.id = sub_categories.category_id', 'left');
        $this->db->join('collections', 'collections.id = expense.unit', 'left');
        $this->db->where('expense.user_id',$userid);
        $this->db->order_by('expense.purchase_date','DESC');
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }
    
    function getTypeList($id){
        $this->db->select('collections.name,collections.id');
        $this->db->from('collections');
        $this->db->where('collections.collectiontype_id',$id);
        $this->db->order_by('collections.name');
        $result = $this->db->get()->result_array();
        if (isset($result)) {
            return $result;
        } else {
            return '';
        }
    }
    
    function getAccounts()
    {
        $this->db->select('account_master.account_owner,account_master.id,'
                . 'account_master.bank_name,account_master.type,'
                . 'collections.name');
        $this->db->from('account_master');
        $this->db->join('collections','collections.id = account_master.type','left');
        $data = $this->db->get();
        $num = $data->num_rows();
        if ($num > 0)
        {
            $result = $data->result_array();
            if (isset($result))
            {
                return $result;
            }
        } else
        {
            return '';
        }
    }
    
    function getAccountDetail($id)
    {
        $this->db->select('account_master.account_owner,account_master.account_number,account_master.ifsc_code,'
                . 'account_master.bank_name,account_master.type,account_master.id,'
                . 'collections.name');
        $this->db->from('account_master');
        $this->db->join('collections','collections.id = account_master.type','left');
        $this->db->where('account_master.id',$id);
        $data = $this->db->get();
        $num = $data->num_rows();
        if ($num > 0)
        {
            $result = $data->result_array();
            if (isset($result[0]))
            {
                return $result[0];
            }
        } else
        {
            return '';
        }
    }
}
