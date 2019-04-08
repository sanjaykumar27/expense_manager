<?php

/* * *****************************************
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
        $this->load->model('User_model');
    }

    public function validate() {
        $email = $this->input->POST('email');
        $mobile = $this->input->POST('mobile');
        $first_name = $this->input->POST('first_name');
        $last_name = $this->input->POST('last_name');
        $password = md5($this->input->POST('password'));
        $uid = $this->User_model->get_field_value_condition('user', 'id', array('email' => $email));
        $uidm = $this->User_model->get_field_value_condition('user', 'id', array('mobile' => $mobile));

        if ($uid == '' && $uidm == '') {
            $params = array(
                'email' => $email,
                'mobile' => $mobile,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'password' => $password,
                'user_type' => '2',
                'status' => '0'
            );
            $add_user = $this->User_model->add_user($params);

            if ($add_user != '') {
                $data = array('code' => 1, 'response' => 'Enter Otp Sent to your mobile', 'mobile' => $mobile, 'uid' => $add_user);
                $st = $this->send_otp($mobile, $add_user);
            }
        } else if ($uid == '' && $uidm != '') {
            $data = array('code' => 2, 'response' => 'Mobile number already registered');
        } else {
            $data = array('code' => 3, 'response' => 'Email already registered.');
        }

        echo json_encode($data);
    }

    public function send_mail($to, $user_id, $message, $org_name = '') {

        $status = $this->User_model->get_field_value_condition('user', 'status', array('user_id' => $user_id));
        //Load email library
        $this->load->library('email');

        //SMTP & mail configuration
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'naresh@icubeswire.com',
            'smtp_pass' => '9050135625',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        //Email content
        $htmlContent = $message;


        $this->email->to($to);
        if ($status == 0 && $org_name != 'icubeswire') {
            $this->email->bcc('sales@icubeswire.com');
        }

        $this->email->from('admin@delta.com', 'Delta Icubeswire');
        $this->email->subject('Account verification');
        $this->email->message($htmlContent);

        //Send email
        return $this->email->send();
    }

    public function register() {

        $user_id = $this->input->GET('ruwid');
        $user_id = base64_decode(urldecode($user_id));
        $data['email'] = $this->User_model->get_field_value_condition('user', 'work_email', array('user_id' => $user_id));
        $data['user_id'] = $user_id;
        $status = $this->User_model->get_field_value_condition('user', 'status', array('user_id' => $user_id));
        if ($status == '1') {
            $this->load->view('welcome_message');
        } else {
            $this->load->view('register', $data);
        }
    }

    public function Activate() {
        $first = $this->input->POST('fname');
        $last = $this->input->POST('lname');
        $email = $this->input->POST('email');
        $pass = md5($this->input->POST('password'));
        $user_id = base64_decode(urldecode($this->input->POST('ruwid')));
        $params = array('first_name' => $first, 'last_name' => $last, 'work_email' => $email, 'password' => $pass, 'status' => 1);
        $update = $this->User_model->update_user($user_id, $params);
        if ($update == 'true') {
            $is_admin = $this->User_model->get_field_value_condition('tbl_org_users', 'is_admin', array('user_id' => $user_id));
            $sessdata = array(
                'sess_user_id' => $user_id,
                'sess_users_name' => $first,
                'sess_users_email' => $email,
                'sess_is_admin' => $is_admin,
                'is_logged_in' => 1,
                'is_first_login' => 1
            );
            $this->session->set_userdata($sessdata);
            $data = array('code' => 1, 'response' => 'Account Activated Successfully.');
        } else {
            $data = array('code' => 2, 'response' => 'Something went wrong while activating your account. Please check your details and try again later.');
        }
        echo json_encode($data);
    }

    public function login() {
        $email = $this->input->POST('email');
        $pass = md5($this->input->POST('password'));
        $check_email_exist = $this->User_model->validate_email($email);
        if ($check_email_exist != '') {
            $validated_user = $this->User_model->validate_user($email, $pass);
            if ($validated_user != '') {
                $get_valid_user_details = $this->User_model->get_validated_user_details($validated_user);
                $sessdata = array(
                    'sess_user_id' => $validated_user,
                    'sess_users_name' => $get_valid_user_details['first_name'] . ' ' . $get_valid_user_details['last_name'],
                    'sess_users_email' => $get_valid_user_details['email'],
                    'sess_utype' => $get_valid_user_details['user_type'],
                    'is_logged_in' => 1,
                );
                $this->session->set_userdata($sessdata);
                if ($get_valid_user_details['user_type'] == 'User') {
                    $url = "dashboard/";
                } else {
                    $url = "dashboard/admin";
                }
                $data = array('code' => 1, 'response' => 'success', 'home' => $url);
            } else {
                $registerd_cell = $this->User_model->get_field_value_condition('user', 'mobile', array('email' => $email));
                $ruwid = $this->User_model->get_field_value_condition('user', 'id', array('email' => $email));
                if ($registerd_cell != '') {
                    $data = array('code' => 0, 'response' => "Incorrect password. Don't remember your password? <a href='javascript:;' id='sign_up_otp' class='m-link m-link--focus m-login__account-link' data-cell='" . $registerd_cell . "' data-uid='" . base64_encode(urlencode($ruwid)) . "'>Login Via OTP</a> OR <a href='javascript:;'' id='forget' class='m-link'>Forget Password ?</a>");
                } else {
                    $cell = $this->User_model->get_field_value_condition('user', 'mobile', array('mobile' => $email));
                    if ($cell != '') {
                        $data = array('code' => 0, 'response' => "Incorrect password. Don't remember your password? <a href='javascript:;' id='sign_up_otp' class='m-link m-link--focus m-login__account-link' data-cell='" . $cell . "' data-uid='" . base64_encode(urlencode($ruwid)) . "'>Login Via OTP</a> OR <a href='javascript:;'' id='forget' class='m-link'>Forget Password ?</a>");
                    } else {
                        $data = array('code' => 0, 'response' => "Incorrect password. Don't remember your password? <a href='javascript:;'' id='forget' class='m-link'>Forget Password ?</a>");
                    }
                }
            }
        } else {
            $data = array("code" => 2, "response" => "Email or Mobile has not been registerd with us. <a href='javascript:;' id='sign_up_now' class='m-link m-link--focus m-login__account-link'>Sign Up Now</a>");
        }
        echo json_encode($data);
    }

    public function logout() {
        $this->session->sess_destroy();
        $url = '/';
        redirect($url);
        exit;
    }

    public function forget_password() {

        $email = $this->input->post('email');

        $new_pass = $this->random_password(8);

        $user_id = $this->User_model->get_field_value_condition('user', 'user_id', array('work_email' => $email));

        if ($user_id != '') {

            $params = array('password' => md5($new_pass));

            $update = $this->User_model->update_user($user_id, $params);

            if ($update != 'false') {
                $message = "Here is your new Password:" . $new_pass;
                $this->send_mail($email, $user_id, $message);
                $data = array('code' => 1, 'response' => 'Paasword Reset Successfully. Please Check your email for the new password.');
            } else {
                $data = array('code' => 2, 'response' => 'Something went wrong please Try again after some time');
            }
        } else {
            $data = array('code' => 3, 'response' => 'Invalid Email Id. Please enter your registerd email');
        }
        echo json_encode($data);
    }

    function random_password($length = 8) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, $length);
        return $password;
    }

    public function send_otp($mobile = '', $user_id = '') {
        if ($mobile == '' && $user_id == '') {
            $mobile = $this->input->POST('mobile');
            $user_id = $this->User_model->get_field_value_condition('user', 'id', array('mobile' => $mobile));


            $check_email_exist = $this->User_model->validate_email($mobile);
            if ($check_email_exist != '') {

                $code = $this->User_model->check_otp($mobile);

                if ($code == '') {
                    $code = substr(str_shuffle(time()), 0, 6);
                    $this->User_model->save_otp($mobile, $user_id, $code);
                }

                $msg = urlencode("Your verification code is $code.");

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, "http://api-alerts.solutionsinfini.com/v4/?method=sms&api_key=Ade6a9f343d6ab6999ebe580ef7617d9a&to=$mobile&sender=CPCERS&message=$msg");

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                $output = curl_exec($ch);

                curl_close($ch);

                $output = json_decode($output);

                $status = $output->status;

                if ($status == 'OK') {
                    $data = array('code' => 1, 'response' => 'Please Enter the OTP sent to your mobile. It will be valid for 30 minutes only.');
                } else {
                    $data = array('code' => 2, 'response' => 'Somethign went wrong while sending otp to your number please check your number and try again later.');
                }

                echo json_encode($data);
            } else {
                $data = array('code' => 2, 'response' => 'Incorrect Mobile Number Entered.');
            }
        } else {
            $code = $this->User_model->check_otp($mobile);

            if ($code == '') {
                $code = substr(str_shuffle(time()), 0, 6);
                $this->User_model->save_otp($mobile, $user_id, $code);
            }

            $msg = urlencode("Your verification code is $code.");

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://api-alerts.solutionsinfini.com/v4/?method=sms&api_key=Ade6a9f343d6ab6999ebe580ef7617d9a&to=$mobile&sender=CPCERS&message=$msg");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            $output = curl_exec($ch);

            curl_close($ch);

            $output = json_decode($output);

            return $status = $output->status;
        }
    }

    public function resend_otp() {
        $mobile = $this->input->post('mobile');
        $user_id = $this->input->post('uid');
        $code = $this->User_model->check_otp($mobile);

        if ($code == '') {
            $code = substr(str_shuffle(time()), 0, 6);
            $this->User_model->save_otp($mobile, $user_id, $code);
        }

        $msg = urlencode("Your verification code is $code.");

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://api-alerts.solutionsinfini.com/v4/?method=sms&api_key=Ade6a9f343d6ab6999ebe580ef7617d9a&to=$mobile&sender=CPCERS&message=$msg");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $output = curl_exec($ch);

        curl_close($ch);

        $output = json_decode($output);

        $status = $output->status;

        if ($status == 'OK') {
            $data = array('code' => 1, 'response' => 'Please Enter the OTP sent to your mobile. It will be valid for 30 minutes only.', 'mobile' => $mobile);
        } else {
            $data = array('code' => 2, 'response' => 'Somethign went wrong while sending otp to your number please check your number and try again later.');
        }

        echo json_encode($data);
    }

    public function verify_otp() {

        $mobile = $this->input->post('mobile');

        $otp = $this->input->post('otp');
        $user_id = $this->input->post('uid');



        $if_already_verified = $this->User_model->alreaday_verified($mobile, $otp, $user_id);

        if ($if_already_verified == 'false') {

            $verify = $this->User_model->verify_otp($mobile, $otp, $user_id);



            if ($verify == 'true') {
                $utype = $this->User_model->get_field_value_condition('user', 'user_type', array('id' => $user_id));
                if ($utype != 2) {
                    $p = array('status' => 0, 'mobile' => $mobile);
                } else {
                    $p = array('status' => 1, 'mobile' => $mobile);
                }

                $up = $this->User_model->update_user($user_id, $p);
                if ($up == 'true') {
                    $data = array('code' => 1, 'response' => 'success', 'home' => base_url() . '');
                } else {
                    $data = array('code' => 2, 'response' => 'Something went wrong please try again later');
                }
            } else {
                $data = array('code' => 2, 'response' => 'Please Enter A valid OTP');
            }
        } else {
            $data = array('code' => 1, 'response' => 'otp already verfied', 'home' => base_url() . 'dashboard');
        }

        echo json_encode($data);
    }

    public function login_via_otp() {

        $mobile = $this->input->post('mobile');

        $otp = $this->input->post('otp');

        $user_id = $this->User_model->get_field_value_condition('user', 'id', array('mobile' => $mobile));

        if ($user_id != '') {
            //$user_id=base64_decode(urldecode($this->input->post('ruwid')));

            $if_already_verified = $this->User_model->alreaday_verified($mobile, $otp, $user_id);

            if ($if_already_verified == 'false') {

                $verify = $this->User_model->verify_otp($mobile, $otp, $user_id);



                if ($verify == 'true') {
                    $session_details = $this->User_model->get_validated_user_details($user_id);
                    //$is_admin=$this->User_model->get_field_value_condition('tbl_org_users','is_admin',array('user_id'=>$user_id));

                    $sessdata = array(
                        'sess_user_id' => $user_id,
                        'sess_users_name' => $session_details['first_name'] . ' ' . $session_details['last_name'],
                        'sess_users_email' => $session_details['email'],
                        'sess_utype' => $session_details['user_type'],
                        'is_logged_in' => 1,
                    );


                    $this->session->set_userdata($sessdata);

                    if ($session_details['user_type'] == 'Patient') {
                        $is_dashboard_ready = $this->User_model->get_field_value_condition('survey_master', 'complete_flag', array('patient_id' => $user_id));

                        if ($is_dashboard_ready == 1) {
                            $url = 'dashboard/Patient_dashboard/';
                        } else {
                            $url = "dashboard/survey";
                        }
                    } else if ($session_details['user_type'] == 'Doctor') {
                        $url = "dashboard/doctor_dashboard/";
                    } else {
                        $url = "dashboard/survey";
                    }

                    $data = array('code' => 1, 'response' => 'success', 'home' => base_url() . $url);
                } else {
                    $data = array('code' => 2, 'response' => 'Please Enter A valid OTP');
                }
            } else {
                $data = array('code' => 1, 'response' => 'otp already verfied', 'home' => base_url() . 'dashboard/');
            }
        } else {
            $data = array('code' => 2, 'response' => 'Invalid Mobile Number');
        }

        echo json_encode($data);
    }

    public function resend_email() {

        $email = $this->input->post('email');
        $user_id = $this->User_model->get_field_value_condition('user', 'user_id', array('work_email' => $email));

        $org_id = $this->User_model->get_field_value_condition('tbl_org_users', 'org_id', array('user_id' => $user_id));

        $org_name = $this->User_model->get_field_value_condition('tbl_organisation', 'org_name', array('org_id' => $org_id));


        if ($org_name == 'icubeswire') {
            $message = "<html>
			<head>
			<title>Complete Registration Process Icubeswire Delta</title>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<link rel='shortcut icon' href='" . base_url() . "assets/assets/demo/default/media/img/logo/favicon.ico' />
			</head>
			<body bgcolor='#ffffff' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
			<!-- Save for Web Slices (emailer.jpg) -->
			<table cellspacing='0' cellpadding='0' width='700' border='0' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td>
			<table cellspacing='0' cellpadding='0' border='0' width='700' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td height='40'>&nbsp;

			</td>
			</tr>
			<tr>
			<td>
			<table cellpadding='0' cellspacing='0' width='600' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 24px;  text-align:center;line-height:32px;font-weight: 700;'>
			<a href='#' style='color: #c00000;text-decoration: none;'><img src='" . base_url() . "assets/assets/app/media/img//logos/logo-2.png'></a>
			</td>
			</tr>
			<tr>
			<td>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 24px; text-align:center;line-height:32px;'>
			<a href='#' style='color: rgb(68,84,106);text-decoration: none;'>You're one click away!</a>
			</td>
			</tr>
			<tr>
			<td height='40'>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 14px; text-align:center;line-height:32px;'>
			<a href='" . site_url() . "auth/register?ruwid=" . urlencode(base64_encode($user_id)) . "' style='color: #000;text-decoration: none;border:2px solid rgb(68,84,106);border-radius: 4px;padding:15px 45px;'>Verify your email</a>
			</td>
			</tr>
			<tr>
			<td height='60'>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 14px; color: #000; text-align:center;line-height:32px;'>You've received this email because you requested a Delta account with this email address.
			</td>
			</tr>
			<tr>
			<td>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 14px; color: #000; text-align:center;line-height:32px;'>If you didn't intend to, you can ignore this email-the account hasn't been created yet.
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td height='60'>&nbsp;

			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td>
			<table cellspacing='0' cellpadding='0' border='0' width='700' bgcolor='#ffffff' align='center'>
			<tbody>
			<tr>
			<td height='40'>&nbsp;

			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td>
			<table cellspacing='0' cellpadding='0' border='0' width='700' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 12px; color: #222; text-align:center;line-height:20px;'>Having trouble with the button? Copy and paste this link into your browser:
			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 12px; color: #222; text-align:center;line-height:20px;'>" . site_url() . "auth/register?ruwid=" . urlencode(base64_encode($user_id)) . "
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			<!-- End Save for Web Slices -->
			</body>
			</html>";
        } else {
            $message = "<html>
			<head>
			<title>Icubeswire Welcome Message</title>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<link rel='shortcut icon' href='" . base_url() . "assets/assets/demo/default/media/img/logo/favicon.ico' />
			</head>
			<body bgcolor='#82cbf8' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
			<!-- Save for Web Slices (emailer.jpg) -->
			<table cellspacing='0' cellpadding='0' width='700' border='0' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td>
			<table cellspacing='0' cellpadding='0' border='0' width='700' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td height='40'>&nbsp;

			</td>
			</tr>
			<tr>
			<td>
			<table cellpadding='0' cellspacing='0' width='600' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 24px;  text-align:center;line-height:32px;font-weight: 700;'>
			<a href='#' style='color: #c00000;text-decoration: none;'><img src='" . base_url() . "assets/assets/app/media/img/logos/logo-2.png'></a>
			</td>
			</tr>
			<tr>
			<td>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 26px; text-align:center;line-height:32px;'>
			<a href='#' style='color: rgb(68,84,106);text-decoration: none;'>Thank you for your interest in Delta!</a>
			</td>
			</tr>
			<tr>
			<td>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 15px; text-align:center;line-height:20px;'>
			<a href='#' style='color: #555;text-decoration: none;'>We are glad that you are on the path to higher ROI. Delta team will be happy<br> to assist you in achieving your business goals.</a>
			</td>
			</tr>
			<tr>
			<td height='25'>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 15px; text-align:center;line-height:15px;'>
			<a href='#' style='color: #555;text-decoration: none;'>Our sales team will reach out to you shortly. If you would like us to call you,<br> please request a callback below.</a>
			</td>
			</tr>
			<tr>
			<td height='35'>&nbsp;

			</td>
			</tr>
			<tr>
			<td>
			<a href='https://www.icubeswire.com/delta?utm_source=delta_signup'><button type='submit' style='outline: none;border-radius: 5px;border: 2px solid #777;background: transparent;padding: 10px 15px;cursor: pointer;' id='submit'>Arrange A Callback</button>
			</a>
			</td>
			</tr>
			<tr>
			<td height='32'>&nbsp;

			</td>
			</tr>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 22px; text-align:center;line-height:15px;'>
			<a href='#' style='color: #555;text-decoration: none;'>We are closer then you think!</a>
			</td>
			</tr>
			<tr>
			<td>
			<table align='center' width='700' cellpadding='0' cellspacing='0' border='0' class='' style='background-color: #f7f7f7;table-layout: auto;'>
			<tbody>
			<tr>
			<td>
			<table align='left' cellspacing='0' cellpadding='0' border='0' width='230' class='' style='table-layout: auto;'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 14px; text-align:center;color:#555;padding-left: 15px;padding-right: 15px;margin-top:32px;'>
			<strong>Gurgaon</strong> <br>
			954 A-B, 9th Floor, JMD Megapolis,
			Sohna Road, Sector 48, Gurgaon,
			Haryana, 122018
			phone: +91 124 2654205,
			+91 124 2654206 
			</td>
			</tr>
			</tbody>
			</table>
			<table align='left' cellspacing='0' cellpadding='0' border='0' width='230' class='' style='table-layout: auto;'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 14px; text-align:center;color:#555;padding-left: 15px;padding-right: 15px;margin-top:32px;'>
			<strong>Mumbai</strong> <br>
			1305, 13th Floor, Lodha Supremus,
			Saki Vihar Road, Powai, Mumbai -
			400 072
			phone: +91 22 42082207,
			+91 22 42082200 
			</td>
			</tr>
			</tbody>
			</table>
			<table align='left' cellspacing='0' cellpadding='0' border='0' width='230' class='' style='table-layout: auto;'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 14px; text-align:center;color:#555;padding-left: 15px;margin-top:32px;'>
			<strong>Bangalore</strong> <br>
			Embassy Golf-Links Business Park,
			CB-16, 1st Floor, Pine Valley
			Building, Bangalore, 560071
			phone: +91 80 41764679 / 80
			+91 80 41764548
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td height='60'>&nbsp;

			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td>
			<table cellspacing='0' cellpadding='0' border='0' width='700' bgcolor='#f7f7f7' align='center'>
			<tbody>
			<tr>
			<td align='center' style='font-family: Myriad Pro, regular, sans-serif; font-size: 12px; color: #222; text-align:center;line-height:15px;padding:15px;'>You are receiving this email because you or someone else requested access to Delta with this email. If you did not do this, relax, an account has not been created yet & no further action is required.
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</body>
			</html>";
        }


        $mail = $this->send_mail($email, $user_id, $message, $org_name);

        $data = array('code' => 1, 'response' => 'Mail Sent Successfully');

        echo json_encode($data);
    }

    /* this function prints the beautiful array */

    public function echoThis($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

}
