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

    public function create_expense()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1)
        {
            $data['page_name'] = 'Create Expense';
            $data['categories_list'] = $this->Dashboard_model->getCategoriesList();
            $data['type_list'] = $this->Dashboard_model->getTypeList();
            $this->load->view('expense/create_expense',$data);
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
            $data['page_name'] = 'Expense';
            $data['categories_list'] = $this->Dashboard_model->getCategoriesList();
            $user_id = $this->session->userdata('sess_user_id');
            $data['all_expense'] = $this->Dashboard_model->getExpenseList($user_id);
            //$this->echoThis($data);die;
            $this->load->view('expense/expense_list', $data);
        }
        else
        {
            redirect('/');
        }
    }
    
    public function getSubCategories()
    {
        if (strlen($this->session->userdata('is_logged_in')) and $this->session->userdata('is_logged_in') == 1) {
            $html = '<option disabled selected value="">--select one--</option>';
            $cat_id = $this->input->post('cat_id');
            $data['categories'] = $this->Dashboard_model->getCategories($cat_id);
            foreach($data['categories'] as $value)
            {
                $html .= '<option value="'.$value["sub_id"].'">'.$value["subcategory_name"].'</option>';
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
            $user_id = $this->session->userdata('sess_user_id');
            $config['upload_path'] = FCPATH . "/assets/uploads/reciept/";
            $config['max_size'] = '0';
            $config['allowed_types'] = 'gif|jpg|png|pdf|doc|xls|jpeg|psd|mp4|mp3|ogv|mpeg|xlsx|docs|rtf|docx|rar|zip|tr|ppt|pptx';
            $this->load->library('upload', $config);
            
            if ($_FILES['custom_file']['name'] != '') {
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
                if (!$this->upload->do_upload('custom_file')) {
                    $data = array('code' => 2, 'response' => $this->upload->display_errors());
                    echo json_encode($data);
                } else {
                    $file_details = $this->upload->data();
                }
                if (isset($file_details)) {
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
                'receipt_name'=> $fileName,
                'remark' => $this->input->POST('remark'),
                'amount' => $this->input->POST('amount'),
                'deleted' => 0
            );
            $Id = $this->Expense_model->createExpense($param);
            if($Id != "")
            {
                $data = array('code' => 1, 'response' => 'Expense Created Succesfully!');
            }  else
            {
                $data = array('code' => 2, 'response' => 'Something wrong happened! Please try again');
            }
            echo json_encode($data);
        } else 
        {
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
