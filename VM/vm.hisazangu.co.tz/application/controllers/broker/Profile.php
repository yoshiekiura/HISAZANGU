<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author Sarah Bigambalaye
 */
class Profile extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        ( $this->require_role('broker'));
        
        $this->load->model('broker_model');
        $this->load->library('broker_library');
        $this->load->helper('broker');
    }
    
     
     public function index()
//       This function loads the broker's profile view
        {
            $this->load->view('broker/hor_view');
            $this->load->view('broker/ver_view');
            $this->load->view('broker/profile');
            $this->load->view('broker/footer_view');
        }
        
        public function settings()
 //       This function loads the broker's settings view
        {       
            $this->load->view('broker/hor_view');
            $this->load->view('broker/ver_view');
            $this->load->view('broker/profile_settings');
            $this->load->view('broker/footer_view');
        }
}
