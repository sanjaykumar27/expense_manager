<?php

/* index -> go to dashboard view
 * categories() 
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dashboard_model');
        $this->load->model('Expense_model');
    }
    
    public function createAccount()
    {
        $param = array(
            'account_owner' => $this->input->POST('account_owner'),
            'account_number' => $this->input->POST('account_number'),
            'bank_name' => $this->input->POST('account_name'),
            'ifsc_code' => $this->input->POST('ifsc'),
            'type' => $this->input->POST('account_type'),
            'address' => $this->input->POST('account_address'),
            'CRN' => $this->input->POST('CRN'),
            'status' => 1
        );
        
        $id = $this->Expense_model->insertSingleTable('account_master',$param);
        if ($id != "")
        {
            $data = array('code' => 1, 'response' => 'Account Created Succesfully!');
        }
        else
        {
            $data = array('code' => 2, 'response' => 'Something wrong happened! Please try again');
        }
        echo json_encode($data);
    }

    public function create_expense()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Create Expense';
            $data['categories_list'] = $this->Dashboard_model->getCategoriesList();
            $data['type_list'] = $this->Dashboard_model->getTypeList(1);
            $data['payment_type'] = $this->Dashboard_model->getTypeList(2);
            $data['payment_mode'] = $this->Dashboard_model->getPaymentMode();
            $this->load->view('expense/create_expense', $data);
        }
        else
        {
            redirect('/');
        }
    }

    public function expense_list()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['total_amount'] = 0;
            $data['page_name'] = 'Expense List';
            $data['categories_list'] = $this->Dashboard_model->getCategoriesList();
            $user_id = $this->session->userdata('sess_user_id');
            $data['all_expense'] = $this->Dashboard_model->getExpenseList($user_id);
            if(empty($data['all_expense']))
            {
                $data['all_expense'] = "NO RECORD FOUND!";
            }
            else
            {
                foreach($data['all_expense'] as $key => $value)
                {
                    $data['all_expense'][$key]['payment'] = $this->Dashboard_model->getCollectionName($value['payment_type']);
                    $data['total_amount'] += $value['amount'];
                    $data[$key]['purchase_date'] = date('d-m-Y',strtotime($value['purchase_date']));
                }
            }
            //$this->echoThis($data['all_expense']);die;
            $this->load->view('expense/expense_list', $data);
        }
        else
        {
            redirect('/');
        }
    }

    public function getSubCategories()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $html = '<option disabled selected value="">--select one--</option>';
            $cat_id = $this->input->post('cat_id');
            $data['categories'] = $this->Dashboard_model->getCategories($cat_id);
            foreach ($data['categories'] as $value)
            {
                $html .= '<option value="' . $value["sub_id"] . '">' . $value["subcategory_name"] . '</option>';
            }
            echo $html;
        }
        else
        {
            redirect('/');
        }
    }

    public function createExpense()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $image_url = $file_details['file_name'] = null;
            $user_id = $this->session->userdata('sess_user_id');
            $config['upload_path'] = FCPATH . "/assets/uploads/reciept/";
            $config['max_size'] = '0';
            $config['allowed_types'] = 'gif|jpg|png|pdf|doc|xls|jpeg|psd|mp4|mp3|ogv|mpeg|xlsx|docs|rtf|docx|rar|zip|tr|ppt|pptx';
            $this->load->library('upload', $config);

            if ($_FILES['custom_file']['name'] != '')
            {
                $files = $_FILES['custom_file'];
                $_FILES['custom_file']['name'] = $files['name'];
                $_FILES['custom_file']['type'] = $files['type'];
                $_FILES['custom_file']['tmp_name'] = $files['tmp_name'];
                $_FILES['custom_file']['error'] = $files['error'];
                $_FILES['custom_file']['size'] = $files['size'];
                $title = time();
                $fileName = $title . '_' . $files['name'];
                $images[] = $fileName;
                $config['file_name'] = $fileName;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('custom_file'))
                {
                    $data = array('code' => 2, 'response' => $this->upload->display_errors());
                }
                else
                {
                    $file_details = $this->upload->data();
                }
                if (isset($file_details))
                {
                    $image_url = base_url() . 'assets/uploads/attachments/' . $file_details['file_name'];
                }
            }

            $param = array(
                'user_id' => $user_id,
                'category_id' => $this->input->POST('subcat_id'),
                'quantity' => $this->input->POST('quantity'),
                'unit' => $this->input->POST('type'),
                'purchase_date' => $this->input->POST('date'),
                'receipt_url' => $image_url,
                'receipt_name' => $file_details['file_name'],
                'remark' => $this->input->POST('remark'),
                'amount' => $this->input->POST('amount'),
                'account' => $this->input->POST('account'),
                'payment_type' => $this->input->POST('payment_type'),
                'deleted' => 0
            );
            
            $Id = $this->Expense_model->insertSingleTable('expense',$params);
            if ($Id != "")
            {
                $data = array('code' => 1, 'response' => 'Expense Created Succesfully!');
            }
            else
            {
                $data = array('code' => 2, 'response' => 'Something wrong happened! Please try again');
            }
            echo json_encode($data);
        }
        else
        {
            redirect('/');
        }
    }

    public function emi_list()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'EMI List';
            $data['emi_list'] = $this->Expense_model->getAllRecord('loan_master');
            $data['paid_via'] = $this->Expense_model->getCategoryList(4);
            //$this->echoThis($data['emi_list']);die;
            $this->load->view('loans/emi_list', $data);
        }
        else
        {
            redirect('/');
        }
    }

    public function addEMI()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $param = array(
                'loan_name' => $this->input->POST('emi_name'),
                'starting_date' => $this->input->POST('starting_date'),
                'ending_date' => $this->input->POST('ending_date'),
                'total_amount' => $this->input->POST('total_amount'),
                'no_of_emi' => $this->input->POST('no_of_emi'),
                'interest_amount' => $this->input->POST('interest_amount'),
                'cash_paid' => $this->input->POST('cash_paid'),
                'paid_via' => $this->input->POST('paid_via'),
                'status' => 1
            );
            $insertId = $this->Dashboard_model->insertData($param,'loan_master');
            if ($insertId > 0)
            {
                $data = array('code' => 1, 'response' => 'EMI Succesfully Created');
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

    public function emi_detail()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'EMI Details';
            $emi_id = $this->uri->segment(3);
            $data['emi_master'] = $this->Expense_model->getEmiMasterDetail($emi_id);
            $data['installment_list'] = $this->Expense_model->getInstallmentList($emi_id);
            
            $paid_amount = 0;
            $count = 0;
            foreach($data['installment_list'] as $key => $value)
            {
                if($value['status'] == 1)
                {
                    $paid_amount += $value['loan_amount'];
                    $count++;
                }
            }

            $data['emi_id'] = $emi_id;
            $data['paid_amount'] = $paid_amount;
            $data['emi_count'] = $count;
            //$this->echoThis($data);die;
            $this->load->view('loans/emi_details', $data);
        }
        else
        {
            redirect('/');
        }
        
    }

    public function pay_installment()
    {
        $instaid = $this->input->POST('insta_id');
        $loanid = $this->input->POST('loan_id');
        $installment_count = $this->Expense_model->checkInstallmentStatus($loanid);
        
        /* if this is the last installment making installment mast as complete on installment master page */
        if($installment_count['no_of_emi'] == $installment_count['loan_paid'] + 1)
        {
            $param = array(
                'status' => 1
            );
            $up = $this->Expense_model->updateField('loan_master','id',$loanid, $param);
        }
        //$this->echoThis($installment_count);
        $param = array(
            'paid_on' => $this->input->POST('paid_date'),
            'status' => 1
        );
        
        $insertId = $this->Expense_model->updateField('loan_details','id',$instaid, $param);
        if ($insertId > 0)
        {
            $data = array('code' => 1, 'response' => 'Installment Paid Succesfully');
        }
        else
        {
            $data = array('code' => 0, 'response' => 'Something went Wrong! Please try again later.');
        }
        echo json_encode($data);
    }
    
    public function create_installment()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $param = array(
            'due_date' => $this->input->POST('due_date'),
            'loan_id' => $this->input->POST('loan_id'),
            'paid_on' => null,
            'loan_amount' => $this->input->POST('loan_amount'),
            'status' => 0
        );
        
        $insertId = $this->Dashboard_model->insertData($param,'loan_details');
        if ($insertId > 0)
        {
            $data = array('code' => 1, 'response' => 'Installment Succesfully Created');
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
    
    public function borrowed()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Borrowed List';
            $data['paid_via'] = $this->Expense_model->getCategoryList(2);
            $this->load->view('loans/borrow_list', $data);
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
        print_r($array);
        echo '</pre>';die;
    }

}
