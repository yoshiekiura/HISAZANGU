<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** s
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
                $this->_profile_data();
	}
        
        private function _profile_data() {
            $this->require_min_level(1);
            // load profile data form controllers
            $this->profile_data = $this->my_auth_model->_get_profile_data( $this->auth_user_id );
            
            // load profile data for views
            $var['profile_data'] = $this->profile_data;            
            $this->load->vars($var);
            
        }
}

/* End of file MY_Controller.php */
/* Location: /auth/core/MY_Controller.php */