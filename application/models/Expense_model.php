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
    
    
}
