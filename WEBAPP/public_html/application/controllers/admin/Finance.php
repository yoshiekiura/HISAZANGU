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
class Finance extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        ( $this->require_role('admin'));
        
        $this->load->model('admin_model');
        $this->load->library('admin_library');
            
    }
    
    public function index() {
        $pagedata = array('title' => 'Finance Accounts | Todo',
             'accounts' => $this->admin_model->accounts());
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_accounts');
    }
    
    public function transdetails($key) {
       print json_encode($this->admin_model->transdetails($key)) ;
    }
    public function accountBalance($key) {
        print 'TSH '.number_format($this->admin_library->account_balance($key));
    }  
    
    public function transact() {
        $result['status'] = NULL;
        $account = $this->input->get('account');
       if($key = $this->admin_model->account($account)):    
           $id = $key->account_key;
           $data = $this->__transact_data($key->account_name,$id);
           if($this->admin_model->transact($data)):
               $result['status'] = 'success';
           endif;
       endif;
       print json_encode($result);
    }
    
    public function account($key=NULL) {
        $pagedata = array('title' => 'Finance Accounts | Todo',
             'account' => $this->admin_model->account($key));
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_account');
    }
    
    public function accounts() {
        $pagedata = array('title' => 'Finance Accounts | Todo',
             'accounts' => $this->admin_model->accounts());
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_accounts');
    }
    
    public function sources() {
        $pagedata = array('title' => 'Finance Sources | Todo',
             'accounts' => $this->admin_model->accounts());
        $this->load->vars($pagedata);
        $this->load->view('admin/finance_sources');
    }
    
    function deleteTransRecord(){
        $key = $this->input->get('id');
        if($this->admin_model->deleteTransRecord($key)):
        $result['status'] = 'success';
        else:
            $result['status'] = 'Failed';
        endif;
        
        print json_encode($result);
    }
    
    public function trans($key=NULL) {
        $this->load->library('datatables_library');
        // DB table to use
        $table = 'kelly_'.config_item('accounttranstable');

        // Table's primary key
        $primaryKey = 'trans_id';
        
        // Array of database columns which should be read and sent back to DataTables.
        // The `db` parameter represents the column name in the database, while the `dt`
        // parameter represents the DataTables column identifier. In this case simple
        // indexes
        $columns = array(
            array( 'db' => 'trans_id', 'dt' => 'trans_id' ),
            array( 'db' => 'trans_id', 'dt' => 'transID' ),
            array( 'db' => 'trans_account', 'dt' => 'account_key' ),
            array( 'db' => 'trans_type',  'dt' => 'trans_type' ),
            array( 'db' => 'trans_currency',     'dt' => 'trans_currency' ),
            array(
                'db'        => 'trans_date',
                'dt'        => 'trans_date',
                'formatter' => function( $d, $row ) {
                    return date( 'd\/m\/Y', strtotime($d));
                }
            ),
            array(
                'db'        => 'trans_amount',
                'dt'        => 'trans_amount',
                'formatter' => function( $d, $row ) {
                    return number_format($d);
                }
            )
        );

        // SQL server connection information
        $sql_details = array(
            'user' => 'softne9_todo',
            'pass' => '4hCo)S-7p4',
            'db'   => 'softne9_todo',
            'host' => 'localhost'
        );
        $account = $this->admin_model->account($key);
        $whereresult = "trans_account='".$account->account_key."'";
        $search = $this->input->get('search');
        /*
        if($account):
            $trans = $this->admin_model->account_trans($account->account_key);  
        print json_encode($trans);
        endif; */
        echo json_encode(
                $this->datatables_library::complex( $this->input->get(), $sql_details, $table, $primaryKey, $columns, $search, $whereresult )
            );
        
    }
    
    
     public function allaccounts($key=NULL) {
        if($result = $this->admin_model->transactions()){
            print json_encode($result);
        }        
    }
    
    public function __transact_data($param,$id) {
        switch (strtolower($param)) {
            case 'loan':
                $data = array('trans_pay_date' => date('Y-m-d',strtotime($this->input->get('trans_pay_date'))),'trans_provider' => $this->input->get('trans_provider'),'trans_details' => $this->input->get('trans_details'),'trans_type' => $this->input->get('trans_type'),'trans_amount' => $this->input->get('trans_amount'),'trans_account'=>$id);
                break;
            case 'sponsorship':
                $data = array('trans_provider' => $this->input->get('trans_provider'),'trans_details' => $this->input->get('trans_details'),'trans_type' => $this->input->get('trans_type'),'trans_amount' => $this->input->get('trans_amount'),'trans_account'=>$id);
                break;
            default:
                $data = array('trans_details' => $this->input->get('trans_details'),'trans_type' => $this->input->get('trans_type'),'trans_amount' => $this->input->get('trans_amount'),'trans_account'=>$id);
                break;
        }
        return $data;
    }   
}
