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
class Brokers extends MY_Controller {
    
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
           $pdata = array(
               'title' => 'HisaZangu | Overview'
           );
            $this->load->view('admin/hor_view', $pdata);
            $this->load->view('admin/ver_view');
            $this->load->view('admin/broker');
            $this->load->view('admin/footer_view');
        }
        
        public function register()
        {
            $pdata = array(
               'title' => 'HisaZangu | Register'
           );
            $this->load->view('admin/hor_view', $pdata);
            $this->load->view('admin/ver_view');
            $this->load->view('admin/broker_register');
            $this->load->view('admin/footer_view');
        }

}
