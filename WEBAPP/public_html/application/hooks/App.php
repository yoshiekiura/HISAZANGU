<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author canwo
 */
class App {
    //put your code here
    
 
    public  $apps;
     
    public function __construct() {
        $this->apps =& get_instance();
    }

    
    public function loadlanguages(){
         
      //Load language files
        if(! empty($this->apps->session->userdata('language'))){
            $lang = $this->apps->session->userdata('language');
          }else{
            $lang = 'english';
        }
     // $data['language_id'] = $this->apps->system_model->language_data($lang)->localization_id;
     // $this->apps->config->set_item( 'language_id', $data['language_id']);
     $data['langauge'] = $lang;
     $this->apps->load->vars($data);
     $this->apps->lang->load($this->apps->config->item('languages'),$lang);
    }  
}
