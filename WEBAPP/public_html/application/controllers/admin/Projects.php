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
class Projects extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        ( $this->require_role('admin'));
        
        $this->load->model('admin_model');
        $this->load->library('admin_library');
        $this->load->helper('admin');
            
    }
    
    public function index() {
        $pagedata = array('title' => 'Projects | Todo','link'=>'projects');
        $this->load->vars($pagedata);
        $this->load->view('admin/projects_manage');
    }
    
    public function manage() {
        $pagedata = array('title' => 'Projects | Todo','link'=>'projects');
        $this->load->vars($pagedata);
        $this->load->view('admin/projects_manage');
    }
    
    public function project($key) {
        $pagedata = array('title' => 'Projects | Todo','link'=>'projects','project'=> $this->admin_model->projectdata($key));
        $this->load->vars($pagedata);
        $this->load->view('admin/projects_project');
    }
    
    public function allprojects() {
        print json_encode($this->projects);
    }
    
    public function addproject() {
        $result['status'] = FALSE;
        $key = md5(time());
        $data = array('project_key'=>$key, 'project_name' => $this->input->get('project_name'),'project_details' => $this->input->get('project_details'));
        if($this->admin_model->addproject($data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
   
    public function updateproject($key) {
        $result['status'] = FALSE;
        $data = array('project_name' => $this->input->get('project_name'),'project_details' => $this->input->get('project_details'));
        if($this->admin_model->updateproject($key,$data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
    
    
    public function deleteproject($key) {
        $result['status'] = FALSE;
         if($key != 1 && $key != $this->default_project->project_id):
            if($this->admin_model->deleteproject($key)):
                $result['status'] = 'success';
            endif;
          endif;
       print json_encode($result);
    }
}
