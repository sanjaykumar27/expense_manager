<?php

/* index -> go to dashboard view
 * categories() 
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dashboard_model');
        $this->load->model('Expense_model');
    }

    public function account_list()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Accounts';
            $data['accounts'] = $this->Dashboard_model->getAccounts();
            $data['account_owner'] = $this->Dashboard_model->getAccountOwner();
            $data['payment_type'] = $this->Dashboard_model->getTypeList(3);
            $this->load->view('accounts/accountList', $data);
        } else
        {
            redirect('/');
        }
    }

    public function accountDetails()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Account Details';
            $accid = $this->uri->segment(3);
            $data['account_details'] = $this->Dashboard_model->getAccountDetail($accid);
            $data['transaction_type'] = $this->Dashboard_model->getTypeList(5);
            //$this->echoThis($data['account_details']);die;
            $this->load->view('accounts/accountDetails', $data);
        } else
        {
            redirect('/');
        }
    }

    public function createTransaction()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $this->echoThis($_POST);
        } 
        else
        {
            redirect('/');
        }
    }

    /* this function used to print the data */

    public function echoThis($array)
    {
        echo '<pre>';
        print_r($array);die;
        echo '</pre>';
        die;
    }

}
