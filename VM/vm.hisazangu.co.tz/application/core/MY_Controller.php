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
    public $projects = NULL;
    
    public $profile_data = NULL;

    
    public $setting = NULL;
    
	public function __construct()
	{
		parent::__construct();
                $this->__get_projects();
                $this->__get_default_project();
                $this->__get_settings();
                $this->__get_accounts();
                $this->__get_finance_sources();
	}
        
        
protected function _set_user_variables()
{
  parent::_set_user_variables();
 
  // For controllers
  $this->profile_data = array(
    'first_name' => $this->auth_data->first_name,
    'last_name' => $this->auth_data->last_name,
  );
 
  // For CI config
  $this->config->set_item( 'profile_data', $this->profile_data );
 
  // For views
  $this->load->vars( $this->profile_data );
}



protected function __get_projects(){
  // For controllers
  $this->projects = $this->my_auth_model->projects();
 
  // For CI config
  $this->config->set_item( 'projects', $this->projects );
 
  // For views
  $data['projects'] = $this->projects;
  $this->load->vars( $data );
  
}

protected function __get_settings(){
  // For controllers
  $this->setting = $this->my_auth_model->get_settings();
 
  // For CI config
  $this->config->set_item( 'setting', $this->setting );
 
  // For views
  $data['setting'] = $this->setting;
  $this->load->vars( $data );
  
}

protected function __get_finance_sources(){
  // For controllers
  $this->finance_sources = $this->my_auth_model->get_finance_sources();
 
  // For CI config
  $this->config->set_item( 'finance_sources', $this->finance_sources );
 
  // For views
  $data['finance_sources'] = $this->finance_sources;
  $this->load->vars( $data );
  
}
protected function __get_accounts(){
  // For controllers
  $this->accounts = $this->my_auth_model->accounts();
 
  // For CI config
  $this->config->set_item( 'accounts', $this->accounts );
 
  // For views
  $data['accounts'] = $this->accounts;
  $this->load->vars( $data );
  
}


protected function __get_default_project(){
    if( empty($this->session->project) ):
       $this->default_project = $this->my_auth_model->get_default_project();
       else:
           $this->default_project = $this->session->project;
       endif;

  // For CI config
  $this->config->set_item( 'default_project', $this->default_project );
 
  // For views
  $data['default_project'] = $this->default_project;
  $this->load->vars( $data );
  
}
}

/* End of file MY_Controller.php */
/* Location: /auth/core/MY_Controller.php */