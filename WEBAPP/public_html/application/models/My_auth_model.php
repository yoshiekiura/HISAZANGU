<?php
 
class My_auth_model extends Auth_model {
   
  public function __construct()
  {
    parent::__construct(); 
    
  }
 
  // --------------------------------------------------------------
 
  public function get_auth_data( $user_string )
  {
    if( $auth_data = parent::get_auth_data( $user_string ) )
    {
      return $this->add_profile_data( $auth_data );
    }
 
    return FALSE;
  }
 
  // --------------------------------------------------------------
 
  public function check_login_status( $user_id, $user_login_time )
  {
    if( $auth_data = parent::check_login_status( $user_id, $user_login_time ) )
    {
      return $this->add_profile_data( $auth_data );
    }
 
    return FALSE;
  }
   
  // -----------------------------------------------------------------------
 
  public function add_profile_data( $auth_data )
  {
    if( $auth_data->auth_level == '9' )
    {
      // Selected profile data
      $selected_columns = array(
        'first_name',
        'last_name'
      );
 
      $query = $this->db->select( $selected_columns )
        ->from( config_item('profiletable') )
        ->where( 'user_id=', $auth_data->user_id )
        ->limit(1)
        ->get();
 
      if( $query->num_rows() == 1 )
      {
        foreach( $query->row_array() as $k => $v )
        {
          $auth_data->$k = $v;
        }
      } 
    }
 
    return $auth_data;
  }
   
  // -----------------------------------------------------------------------
  
   public function _get_profile_data($user_id) {
    $this->db->select('*');
    $this->db->where('user_id', $user_id);
    $query = $this->db->get( config_item('user_table'));
    return $query->row();    
  }
  
  public function projects() {
      $query = $this->db->select( '*' )
        ->from( config_item('projectstable') )
        ->get();
    return $query->result_array();
  }
  
  public function get_default_project() {
      $query = $this->db->select( '*' )
        ->where('project_default=',TRUE)
        ->from( config_item('projectstable') )
        ->get();
    return $query->row();
  }
  
  public function get_project_data($key) {
      $query = $this->db->select( '*' )
        ->where('project_key=',$key)
        ->from( config_item('projectstable') )
        ->get();
    return $query->row();
  }
  
  public function accounts() {
      $this->defaultproject = $this->config->item('default_project');
      $query = $this->db->select( '*' )
        ->where('account_project=',$this->defaultproject->project_key)
        ->from( config_item('accountstable') )
        ->get();
    return $query->result_array();
  }
    
  public function get_finance_sources() {
      $this->defaultproject = $this->config->item('default_project');
      $query = $this->db->select( '*' )
        ->where('source_project=',$this->defaultproject->project_key)
        ->from( config_item('financesourcestable') )
        ->get();
     return ($query->num_rows()>0) ? $query->result_array() : FALSE;
  }
  
  public function get_settings() {
      $query = $this->db->select( '*' )
        ->from( config_item('settingstable') )
        ->get();
      $setting = NULL;
      foreach ($query->result_array() as $key => $value) {
          $setting[$value['setting_item']] = $value['setting_value'];
      }
    return $setting;
  }

  public function projectdata($key=NULL) {
      $query = $this->db->select( '*' )
        ->where('project_key=',$key)
        ->limit(1)
        ->from( config_item('projectstable') )
        ->get();
    return ($query->num_rows() == 1)? $query->row() : FALSE;
  }
  
}
 
/* End of file My_auth_model.php */
/* Location: /application/models/My_auth_model */