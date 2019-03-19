<?php
/*******************************************
 *  This controller deals with login authenticationa and permission of the user
 *  List of functions: 
 *  -> index()
 *  -> echoThis()
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        
        $this->load->view('login');
    }
    
    public function login(){
        $email = $this->input->POST('email');
        echo $email;die;
    }
    
    /* this function prints the beautiful array */
    public function echoThis($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

}
