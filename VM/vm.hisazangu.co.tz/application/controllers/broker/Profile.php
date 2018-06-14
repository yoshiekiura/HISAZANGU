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
        
        ( $this->require_role('admin'));
        
        $this->load->model('admin_model');
        $this->load->library('admin_library');
        $this->load->helper('admin');
    }
    
     
     public function index()
        {
            $this->load->view('admin/top_bar');
            $this->load->view('admin/side_bar');
            $this->load->view('admin/profile');
            $this->load->view('admin/footer');
        }
        
        public function settings()
        {       
            $this->load->view('admin/top_bar');
            $this->load->view('admin/side_bar');
            $this->load->view('admin/profile_settings');
            $this->load->view('admin/footer');
        }
}
