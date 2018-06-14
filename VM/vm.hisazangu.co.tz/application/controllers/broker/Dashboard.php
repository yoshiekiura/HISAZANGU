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
        
        ( $this->require_role('broker'));
        
        $this->load->model('broker_model');
        $this->load->library('broker_library');
        $this->load->helper('broker');
            
    }
    
    public function index()
    {
        $this->load->view('broker/top_bar');
        $this->load->view('broker/side_bar');
        $this->load->view('broker/dashboard');
        $this->load->view('broker/footer');
    }
}
