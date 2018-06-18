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
    
    public function account_balance($key) {
        $account = $this->CI->admin_model->account(trim($key));
            if($account):
                return $this->CI->admin_model->account_balance($account->account_key);
            else:
                return 0;
            endif;  
    }
    
    public function admin_register_broker()
    {
        $this->CI->load->library('form_validation');

                $this->CI->form_validation->set_rules('co_name', 'Company Name', 'required|trim');
                $this->CI->form_validation->set_rules('co_phone', 'Company Phone Number', 'required');
                $this->CI->form_validation->set_rules('co_email', 'Company Email', 'required|valid_email|is_unique[users.email]');
                $this->CI->form_validation->set_rules('co_tin', 'Company Tin', 'required');
                $this->CI->form_validation->set_rules('co_id', 'Company Registration iD', 'required');
                $this->CI->form_validation->set_rules('username', 'Broker username', 'required|is_unique[users.username]');
                $this->CI->form_validation->set_rules('passwd', 'Broker Password', 'required');
                $this->CI->form_validation->set_rules('cpasswd', 'Password Confirmation', 'required|matches[passwd]');
                
                if ($this->CI->form_validation->run())
                {
                    return TRUE;
                } else {
                    return FALSE;
                }
                
    }
}
