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
}