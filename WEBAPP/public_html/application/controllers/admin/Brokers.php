<?php

/**
 * Description of Profile
 *
 * @author Sarah Bigambalaye
 */
class Brokers extends MY_Controller {
     
    private $data;
    
    public function __construct()
    {
        parent::__construct();
        
        ( $this->require_role('admin'));
        
        $this->load->model(['admin_model'=>'modal']);
        $this->load->library(['admin_library'=>'library']);
        $this->load->helper('admin');
    }
        
    public function index()
        {
           $pdata = array(
               'title' => 'Overview '. config_item('application_name')
           );
            $this->load->view('admin/header', $pdata);
            $this->load->view('admin/left');
            $this->load->view('admin/brokers');
        }
        
    public function overview()
        {
           $pdata = array(
               'title' => 'Overview '. config_item('application_name')
           );
            $this->load->view('admin/header', $pdata);
            $this->load->view('admin/left');
            $this->load->view('admin/brokers');
        }
        
    public function registration()
        {
        if(strtolower($this->input->server('REQUEST_METHOD')) == 'post'):
                $this->data['form_action'] = TRUE;
                $data['username'] = $this->input->post('username',TRUE);
                $data['email'] = $this->input->post('email',TRUE);
                $data['passwd'] = $this->authentication->hash_passwd($this->input->post('passwd',TRUE));
                $data['firstname'] = $this->input->post('firstname',TRUE);
                $data['middlename'] = $this->input->post('middlename',TRUE);
                $data['lastname'] = $this->input->post('lastname',TRUE);
                $data['phone'] = $this->input->post('phone',TRUE);
                $data['address_primary'] = $this->input->post('address_primary',TRUE);
                $data['about'] = $this->input->post('about',TRUE);
                 if($this->library->broker_registration_validation() == TRUE):
                    if( $this->modal->broker_registration($data)):
                            $this->library->status_message('success','Profile updated successifully');
                            $this->profile_data();
                        else:
                            $this->library->status_message('fail','Failed to update profile');
                    endif;  
                else:
                    $this->library->status_message('fail', validation_errors());
                endif;
            endif; 
            $this->data['title'] = 'Registration '. config_item('application_name');
            $this->load->view('admin/header', $this->data);
            $this->load->view('admin/left');
            $this->load->view('admin/broker_registration');
        }

}
