<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - MY Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

require_once APPPATH . 'third_party/auth/core/Auth_Controller.php';

class MY_Controller extends Auth_Controller
{ 
	/**
	 * Class constructor
	 */
        public $profile_data;
        
        public function __construct()
	{
		parent::__construct();
                $this->public_profile_data();
                
	}
        
        public function public_profile_data() {
            $this->is_logged_in();
            $this->profile_data = $this->global_modal->public_profile_data($this->auth_user_id);
            
            $data['profile_data'] = $this->profile_data;
            $this->load->vars($data);
            
            $this->config->set_item('profile_data', $this->profile_data);
            
        }
         
}

/* End of file MY_Controller.php */
/* Location: /auth/core/MY_Controller.php */