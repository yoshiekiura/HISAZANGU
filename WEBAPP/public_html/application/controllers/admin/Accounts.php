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
class Accounts extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        ( $this->require_role('admin'));
        
        $this->load->model('admin_model');
        $this->load->library('admin_library');
        $this->load->helper('admin');
            
    }
    
    public function index() {
        $pagedata = array('title' => 'Finance Accounts | Todo','link'=>'accounts');
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_accounts_manage');
    }
    
    public function account($key) {
        $pagedata = array('title' => 'Finance Accounts | Todo','link'=>'accounts','account' => $this->admin_model->accountdata($key));
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_accounts_account');
    }
    public function manage() {
        $pagedata = array('title' => 'Finance Accounts | Todo','link'=>'accounts');
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_accounts_manage');
    }
    
    public function allaccounts() {
        print json_encode($this->accounts);
    }
    
    public function addaccount() {
        $result['status'] = FALSE;
        $key = md5(time());
        $data = array('account_project'=> $this->default_project->project_key, 'account_key'=>$key, 'account_name' => $this->input->get('account_name'),'account_details' => $this->input->get('account_details'));
        if($this->admin_model->addaccount($data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
    
    
    public function updateaccount($key) {
        $result['status'] = FALSE;
        $data = array('account_name' => $this->input->get('account_name'),'account_details' => $this->input->get('account_details'));
        if($this->admin_model->updateaccount($key,$data)):
            $result['status'] = 'success';
        endif;
        print json_encode($result);
    }
    
    
    public function deleteaccount($key) {
        $result['status'] = FALSE;
            if($this->admin_model->deleteaccount($key)):
                $result['status'] = 'success';
            endif;
       print json_encode($result);
    }
}
