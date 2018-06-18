<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of global_modal
 *
 * @author Sarah Bigambalaye
 */
class Global_modal extends MY_Model{
    //put your code here
    
    private $userid;

    public function __construct() {
        parent::__construct();

        $this->userid = config_item('auth_user_id');
    }
    
    public function public_profile_data($user_id) {
       
        $this->db->select('firstname,middlename,lastname,address_primary,dob,phonenumber');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get( config_item('user_table'));
        return $query->row();
    }
    
    public function broker_register($data) {
        $data['user_id']= $this->get_unused_id();
        $this->db->insert( config_item('user_table'), $data);
    }
    
    public function client_register($data) {
        $data['user_id']= $this->get_unused_id();
        $this->db->insert( config_item('user_table'), $data);
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

            // If the random user_id is already in use, try again
            return $this->get_unused_id();
        }

        return $random_unique_int;
    }
}
