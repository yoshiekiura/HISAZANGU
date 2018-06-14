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
}
