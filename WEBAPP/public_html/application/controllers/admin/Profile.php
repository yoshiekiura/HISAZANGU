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
        
        $this->load->model(['admin_model'=>'model']);
        $this->load->library(['admin_library'=>'library']);
        $this->load->helper('admin');
    }
    
     
     public function index()
        {
            $this->load->view('admin/header');
            $this->load->view('admin/left');
            $this->load->view('admin/profile_overview');
        }
        
    public function overview()
        {
            $this->load->view('admin/header');
            $this->load->view('admin/left');
            $this->load->view('admin/profile_overview');
        }
        
        public function setting()
        {      
            if(strtolower($this->input->server('REQUEST_METHOD')) == 'post'):
                $this->data['form_action'] = TRUE;
                $data['firstname'] = $this->input->post('firstname',TRUE);
                $data['middlename'] = $this->input->post('middlename',TRUE);
                $data['lastname'] = $this->input->post('lastname',TRUE);
                $data['dob'] = $this->input->post('dob',TRUE);
                $data['phone'] = $this->input->post('phone',TRUE);
                $data['address_primary'] = $this->input->post('address_primary',TRUE);
                $data['about'] = $this->input->post('about',TRUE);
                if( $this->model->update_profile($data)):
                        $this->library->status_message('success','Profile updated successifully');
                        $this->profile_data();
                    else:
                        $this->library->status_message('fail','Failed to update profile');
                endif;
            endif; 
            
            $this->load->view('admin/header', $this->data);
            $this->load->view('admin/left');
            $this->load->view('admin/profile_settings');
        }
}
