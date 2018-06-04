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
class Sources extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        ( $this->require_role('admin'));
        
        $this->load->model('admin_model');
        $this->load->library('admin_library');
        $this->load->helper('admin');
            
    }
    
    public function index() {
        $pagedata = array('title' => 'Finance Sources | Todo','link'=>'sources');
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_sources_manage');
    }
    
    public function source($key) {
        $pagedata = array('title' => 'Finance Sources | Todo','link'=>'sources',
            'sourcedata' => $this->admin_model->sourcedata($key),
            'tablefields' => $this->admin_model->tablefields($this->admin_model->sourcedata($key)->source_table));
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_sources_source');
    }
    
    public function sourcetabledata($key) {
        print json_encode($this->admin_model->sourcetabledata($key));
    }
    
    public function sourcetablebalance($key) {
        print 'TSH '.$this->admin_model->sourcetablebalance($key);
    }
    
    public function addsourcetablerecord() {
        $result['status'] = FALSE;
        $table = $this->input->get('table_name');
        $fields = $this->admin_model->tablefields($table);
        foreach ($fields as $key => $value) {
            if($value != 'Record_ID'):
             $data[$value] = $this->input->get($value);
            endif;
        }
         if($this->admin_model->addsourcetablerecord($table,$data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
        
    }
    
    public function deletesourcerecord() {
        $result['status'] = FALSE;
        $table = $this->input->get('table_name');
        $id = $this->input->get('id');
        if($this->admin_model->deletesourcerecord($id,$table)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
    public function manage() {
        $pagedata = array('title' => 'Finance Sources | Todo','link'=>'sources');
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_sources_manage');
    }
    
    public function allsources() {
        print json_encode($this->finance_sources);
    }
    
    public function addsource() {
        $result['status'] = FALSE;
        $key = md5(time());
        $data = array('source_project'=> $this->default_project->project_key, 'source_key'=>$key, 'source_name' => $this->input->get('source_name'),'source_details' => $this->input->get('source_details'));
        if($this->admin_model->addsource($data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
    
    
    public function updatesource($key) {
        $result['status'] = FALSE;
        $data = array('source_name' => $this->input->get('source_name'),'source_details' => $this->input->get('source_details'));
        if($this->admin_model->updatesource($key,$data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
    
    
    public function deletesource($key) {
        $result['status'] = FALSE;
            if($this->admin_model->deletesource($key)):
                $result['status'] = 'success';
            endif;
       print json_encode($result);
    }
}
