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
        
        ( $this->require_role('client'));
        
        $this->load->model('client_model');
        $this->load->library('client_library');
        $this->load->helper('client');
    }
    
     
     public function index()
        {
            $this->load->view('client/top_bar');
            $this->load->view('client/side_bar');
            $this->load->view('client/profile');
            $this->load->view('client/footer');
        }
        
        public function settings()
        {       
            $this->load->view('client/top_bar');
            $this->load->view('client/side_bar');
            $this->load->view('client/profile_settings');
            $this->load->view('client/footer');
        }
}
