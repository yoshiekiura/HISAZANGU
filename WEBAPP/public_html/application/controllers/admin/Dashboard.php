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
        $pagedata = array('title' => 'Dashboard '. config_item('application_name'));
        $this->load->vars($pagedata);        
        $this->load->view('admin/header');
        $this->load->view('admin/left');
        $this->load->view('admin/dashboard');
    }
}
