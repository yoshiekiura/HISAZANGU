<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client_model
 *
 * @author Sarah Daniel
 */
class Client_model extends Auth_model {
    
    
 public function __construct() {
        parent::__construct();
        $this->default_project = $this->config->item('default_project');
    }
    
 public function accounts() {
      $query = $this->db->select( '*' )
        ->where('account_project',$this->default_proect->project_key)
        ->from( config_item('accountstable') )
        ->get();
    return $query->result_array();
  }
  
public function projectdata($key) {
      $query = $this->db->select( '*' )
        ->where('project_key=',$key)
        ->limit(1)
        ->from( config_item('projectstable') )
        ->get();
    return ($query->num_rows()>0)? $query->row() : FALSE;
  }
   
  public function deleteaccount($key) {
      $this->db->limit(1)
        ->where('account_id=',$key)
        ->delete(config_item('accountstable') );
      return ($this->db->affected_rows()==1)? TRUE :FALSE;
  }
  
  public function updateaccount($key,$data) {
      $this->db->limit(1)
        ->where('account_id=',$key)
        ->update(  config_item('acountstable'),$data );
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
  
 public function sourcedata_byid($key) {
      $query = $this->db->select( '*' )
        ->where('source_id=',$key)
        ->where('source_project=',$this->default_project->project_key)
        ->limit(1)
        ->from( config_item('financesourcestable') )
        ->get();
    return ($query->num_rows()>0)? $query->row() : FALSE;
  }
 
  public function addsourcetablerecord($table,$data) {
      $this->db->limit(1)
        ->insert($table,$data );
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
  
  public function deletesourcerecord($id,$table) {
      $this->db->limit(1)
        ->where('Record_ID=',$id)
        ->delete($table);
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
  
  public function sourcedata($key) {
      $query = $this->db->select( '*' )
        ->where('source_key=',$key)
        ->where('source_project=',$this->default_project->project_key)
        ->limit(1)
        ->from( config_item('financesourcestable') )
        ->get();
    return ($query->num_rows()>0)? $query->row() : FALSE;
  }
 
 public function sourcetablebalance($key) {
     $table =  $this->sourcedata_byid($key)->source_table;
      $query1 = $this->db->select_sum( 'amount' )
        ->where('type=','outflow')
        ->from( $table )
        ->get();
      $outflow =  ($query1->num_rows()>0)? $query1->row()->amount : 0;
      $query1->free_result();
      $query2 = $this->db->select_sum( 'amount' )
        ->where('type=','inflow')
        ->from( $table )
        ->get();
      $inflow =  ($query2->num_rows()>0)? $query2->row()->amount : 0;
      $query2->free_result();
      $balance = (float)$inflow - (float)$outflow;
      return $balance;
  }
  
 public function account($key) {
      $query = $this->db->select( '*' )
        ->where('account_key=',$key)
        ->where('account_project=',$this->default_project->project_key)
        ->or_where('account_name=',$key)
        ->limit(1)
        ->from( config_item('accountstable') )
        ->get();
    return ($query->num_rows()>0)? $query->row() : FALSE;
  }
  
  public function account_balance($key) {
       $query1 = $this->db->select_sum( 'trans_amount' )
        ->where('trans_account=',$key)
        ->where('trans_type=','deposit')
        ->from( config_item('accounttranstable') )
        ->get();
      $deposit =  ($query1->num_rows()>0)? $query1->row()->trans_amount : 0;
      $query1->free_result();
      $query2 = $this->db->select_sum( 'trans_amount' )
        ->where('trans_account=',$key)
        ->where('trans_type=','withdraw')
        ->from( config_item('accounttranstable') )
        ->get();
      $withdraw =  ($query2->num_rows()>0)? $query2->row()->trans_amount : 0;
      $query2->free_result();
      $balance = (float)$deposit - (float)$withdraw;
      return $balance;
  }
 
   public function transactions() {
      $query = $this->db->select( '*' )
        ->join(config_item('accountstable'),config_item('accountstable').'.account_key = trans_account','both')
        ->from( config_item('accounttranstable') )
        ->get();
      return ($query->num_rows()>0)? $this->__transactionsall($query->result_array()) : FALSE;
  }
  
  public function account_trans($key) {
      $query = $this->db->select( '*' )
        ->where('trans_account=',$key)
        ->from( config_item('accounttranstable') )
        ->get();
      return ($query->num_rows()>0)? $this->__transactionsall($query->result_array()) : FALSE;
  }
  
 public function transact($data) {
      $this->db->limit(1)
        ->insert( config_item('accounttranstable'),$data );
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
 
  public function tablefields($table){
      return  ($this->db->table_exists($table))? $this->db->list_fields($table) : FALSE;
  }
  
  public function sourcetabledata($key) {
      $table =  $this->sourcedata_byid($key)->source_table;
      $query = $this->db->get($table);
        return $query->result_array();
  }
  
  public function addsource($data) {     
      $this->load->dbforge();
      $table = 'source_'.str_ireplace(' ', '_', $data['source_name']);
      $data['source_table'] = $table;
      $attributes = array('ENGINE' => 'InnoDB');
      $time =   'CURRENT_TIMESTAMP';
      $fields = array(
        'Record_ID' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
        ),
          'amount' => array(
                'type' =>'INT',
                'constraint' => '10',
        ),
          'date' => array(
                'type' =>'TIMESTAMP',
                'default' => $time,
        ),
          'name' => array(
                'type' =>'VARCHAR',
                'constraint' => '100',
        ),
          'type' => array(
                'type' =>'VARCHAR',
                'constraint' => '10'
        )
       );
      $this->db->trans_start();
     
      $this->db->limit(1)->insert(  config_item('financesourcestable') ,$data );
      $this->dbforge->add_field($fields);
      $this->dbforge->add_key('Record_ID', TRUE);
      $this->dbforge->create_table($table, TRUE, $attributes);
      $this->db->trans_complete();
      
      return ($this->db->trans_status() === FALSE) ? FALSE : TRUE;
  }
  
  public function deletesource($key) {
      $this->load->dbforge();
      $table =  $this->sourcedata_byid($key)->source_table;
      $this->db->trans_start();
      $this->db->limit(1)
        ->where('source_id=',$key)
        ->delete(config_item('financesourcestable') );
      $this->dbforge->drop_table($table,TRUE);
      $this->db->trans_complete();
      return ($this->db->trans_status() === FALSE) ? FALSE : TRUE;
  }
  
  public function updatesource($key,$data) {
      $this->db->limit(1)
        ->where('source_id=',$key)
        ->update(config_item('financesourcestable'),$data );
      return ($this->db->affected_rows()==1)? TRUE :FALSE;
  } 
  
  
  
  public function addproject($data) {
      $this->db->limit(1)
        ->insert(  config_item('projectstable'),$data );
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
  
  public function deleteproject($key) {
      $this->db->limit(1)
        ->where('project_id=',$key)
        ->delete(config_item('projectstable') );
      return ($this->db->affected_rows()==1)? TRUE :FALSE;
  }
  
  public function updateproject($key,$data) {
      $this->db->limit(1)
        ->where('project_id=',$key)
        ->update(  config_item('projectstable'),$data );
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
  
 function deleteTransRecord($key){
     $this->db->limit(1)
        ->where('trans_id=',$key)
        ->delete( config_item('accounttranstable'));
      return ($this->db->affected_rows()==1)? TRUE : FALSE; 
  }
  
  private function __transactionsall($trans) {
      foreach ($trans as $key => $value) {
            $data[$key]['trans_id'] = $value['trans_id'];
            $data[$key]['account_name'] = $value['account_name'];
            $data[$key]['trans_account'] = $value['trans_account'];
            $data[$key]['trans_type'] = ucfirst($value['trans_type']);
            $data[$key]['trans_amount'] = $value['trans_currency'].' '.number_format($value['trans_amount']);
            $data[$key]['trans_date'] = date('m\/d\/Y',strtotime($value['trans_date']));
            $data[$key]['trans_time'] = date('H:i:s A',strtotime($value['trans_date']));
      }
      return $data;
  }
  
  private function __transactions($trans) {
      foreach ($trans as $key => $value) {
            $data[$key]['trans_id'] = $value['trans_id'];
            $data[$key]['trans_account'] = $value['trans_account'];
            $data[$key]['trans_type'] = ucfirst($value['trans_type']);
            $data[$key]['trans_amount'] = $value['trans_currency'].' '.number_format($value['trans_amount']);
            $data[$key]['trans_date'] = date('m\/d\/Y',strtotime($value['trans_date']));
            $data[$key]['trans_time'] = date('H:i:s A',strtotime($value['trans_date']));
      }
      return $data;
  }
  
  public function transdetails($key) {
      $query = $this->db->select( '*' )
        ->where('trans_id=',$key)
        ->join(config_item('accountstable'),config_item('accountstable').'.account_key = trans_account','both')
        ->from( config_item('accounttranstable') )
        ->get();
      $row = ($query->num_rows()>0)? $query->row() : FALSE;
      $row->balance = 'TSH '. number_format($this->account_balance($row->trans_account));
      return $row;
  }
  
}
