<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author Sarah
 * Class Dashboard for broker's role
 */
class Dashboard extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        ( $this->require_role('broker'));
        
        $this->load->model('broker_model');
        $this->load->library('broker_library');
        $this->load->helper('broker');
            
    }
    
    public function index() {
//        this function is used to call the broker's dashboard after login
        $pdata = array(
        'title' => 'HisaZangu | Dashboard'
        );
        $this->load->view('broker/hor_view',$pdata);
        $this->load->view('broker/ver_view');
        $this->load->view('broker/dashboard');
        $this->load->view('broker/footer_view');
    }
}
