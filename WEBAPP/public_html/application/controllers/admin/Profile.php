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
    
    private $data;
    
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
            $this->load->view('admin/hor_view');
            $this->load->view('admin/ver_view');
            $this->load->view('admin/profile');
            $this->load->view('admin/footer_view');
        }
         
        public function setting()
        {      
            if(strtolower($this->input->server('REQUEST_METHOD')) == 'post'):
                $this->data['form_action'] = TRUE;
                $this->data['class'] = 'alert-warning';
                $this->data['message'] = 'Failed to complete action';
                $data['firstname'] = $this->input->post('firstname');
                $data['middlename'] = $this->input->post('middlename');
                $data['lastname'] = $this->input->post('firstname');
                $data['dob'] = $this->input->post('dob');
                $data['about'] = $this->input->post('about');
            endif; 
            
            $this->load->view('admin/header', $this->data);
            $this->load->view('admin/left');
            $this->load->view('admin/profile_settings');
        }
}
