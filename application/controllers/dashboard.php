<?php

/* index -> go to dashboard view
 * categories() 
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dashboard_model');
    }

    /* go to dashboard */

    public function index()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'dashboard';
            $this->load->view('dashboard', $data);
        }
        else
        {
            redirect('/');
        }
    }

    /* get the data of categories and subcategories join */

    public function categories()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'category_master';
            /* categories list */
            $data['categories'] = $this->Dashboard_model->getCategories(0);
            /* categories joined subcatogies */
            $data['categories_list'] = $this->Dashboard_model->getCategoriesList();
            $this->load->view('masters/categories', $data);
        }
        else
        {
            redirect('/');
        }
    }

    /* this function will create category */

    public function addCategory()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $param = array(
                'category_name' => $this->input->POST('category_name')
            );
            $insertId = $this->Dashboard_model->createCategory($param);
            if ($insertId > 0)
            {
                $data = array('code' => 1, 'response' => 'Category Succesfully Created');
            }
            else
            {
                $data = array('code' => 0, 'response' => 'Something went Wrong! Please try again later.');
            }
            echo json_encode($data);
        }
        else
        {
            redirect('/');
        }
    }

    public function addSubCategory()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $param = array(
                'category_id' => $this->input->POST('category_id'),
                'subcategory_name' => $this->input->POST('subcategory_name')
            );
            $insertId = $this->Dashboard_model->createSubCategory($param);
            if ($insertId > 0)
            {
                $data = array('code' => 1, 'response' => 'Subcategory Succesfully Created');
            }
            else
            {
                $data = array('code' => 0, 'response' => 'Something went Wrong! Please try again later.');
            }
            echo json_encode($data);
        }
        else
        {
            redirect('/');
        }
    }
    
    public function accounts()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Accounts';
            $data['accounts'] = $this->Dashboard_model->getAccounts();
            $this->load->view('accounts/viewAccounts',$data);
            //$this->echoThis($data);die;
        }
        else 
        {
            redirect('/');
        }
    }
    
    public function accountDetails()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Account Detail';
            $accid = $this->uri->segment(3);
            $data['account_details'] = $this->Dashboard_model->getAccountDetail($accid);
            //$this->echoThis($data);die;
            $this->load->view('accounts/accountDetails',$data);
        }
        else {
             redirect('/');
        }
    }
    /* this function used to print the data */
    public function echoThis($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}
