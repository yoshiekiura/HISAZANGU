<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_library
 *
 * @author test
 */
class Admin_library {
    protected  $CI;
    
    public function __construct() {
        
        $this->CI =& get_instance();
    }
    
    public function status_message($flag,$msg) {
        switch ($flag) {
            case 'success':
                $status['class'] = 'alert-success';
                $status['message'] = $msg;
                break;
            case 'fail':
                $status['class'] = 'alert-danger';
                $status['message'] = $msg;
                break;
            default:
                $status['class'] = 'alert-warning';
                $status['message'] = 'Was unable to perform specified task';
                break;
        }
        $this->CI->load->vars($status);
    }
    
    public function broker_registration_validation() {
        $this->CI->load->library('form_validation');
        $this->CI->load->model('auth/validation_callables');
        $data = array(
                    'email' => $this->CI->input->post('email'),
                    'passwd' => $this->CI->input->post('passwd'),
                    'username' => $this->CI->input->post('username')
                );
                    $this->CI->form_validation->set_data( $data );
                           $rules = [
                                    [
                                     'field' => 'passwd',
                                     'label' => 'Password',
                                     'rules' => [
                                             'trim',
                                             'required',
                                             [ 
                                                     '_check_password_strength', 
                                                     [$this->CI->validation_callables, '_check_password_strength'] 
                                             ]
                                     ]
                             ],
                               [
                                        'field' => 'username',
                                        'label' => 'Username',
                                        'rules' => [
                                                'trim',
                                                'required',
                                                'is_unique['. config_item('user_table').'.user_id]'
                                        ]
                                ],
                               [
                                        'field' => 'email',
                                        'label' => 'Email',
                                        'rules' => [
                                                'trim',
                                                'required',
                                                'is_unique['. config_item('user_table').'.email]'
                                        ]
                                ]
                            ];
             $this->CI->form_validation->set_rules( $rules );               
            if ($this->CI->form_validation->run() == TRUE): 
                return TRUE;
            else:
                return FALSE;
            endif;
    }
}
