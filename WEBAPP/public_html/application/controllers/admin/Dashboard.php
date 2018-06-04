<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author test
 */
class Dashboard extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        ( $this->require_role('admin'));
        
        $this->load->model('admin_model');
        $this->load->library('admin_library');
        $this->load->helper('admin');
            
    }
    
    public function index() {
        $pagedata = array('title' => 'Dashboard | Todo',
             'project' => $this->my_auth_model->projectdata($this->setting['default_project']));
        $this->load->vars($pagedata);
        $this->load->view('admin/dashboard');
    }
}
