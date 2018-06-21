<?php

/**
 * Description of Admin_model
 *
 * @author test
 */
class Admin_model extends Auth_model {

    protected $userid;
    
    public function __construct() {
        parent::__construct();
        $this->userid = config_item('auth_user_id');
    }
    
  public function update_profile($data) {
      $this->db->limit(1)
        ->where('user_id', $this->userid)
        ->update(  config_item('user_table'),$data );
      return ($this->db->affected_rows()==1)? TRUE : FALSE;
  }
  
  public function broker_registration($data) {
      $data['user_id'] = $this->get_unused_id();
      $data['auth_level'] = 7;
      $this->db->limit(1);
      $this->db->insert( config_item('user_table'),$data);
      return ($this->db->affected_rows()>0) ? TRUE : FALSE;
  }
  
   public function get_unused_id()
    {
        // Create a random user id between 1200 and 4294967295
        $random_unique_int = 2147483648 + mt_rand( -2147482448, 2147483647 );

        // Make sure the random user_id isn't already in use
        $query = $this->db->where( 'user_id', $random_unique_int )
            ->get_where( $this->db_table('user_table') );
 
        if( $query->num_rows() > 0 )
        {
            $query->free_result();

            return $this->get_unused_id();
        }

        return $random_unique_int;
    }
}