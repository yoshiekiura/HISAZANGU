<?php
defined('BASEPATH') or exit('No direct script access allowed');
   
class App extends My_Controller
{

    public function __construct()
    {
        parent:: __construct();
      
    }
    
    
    public function index()
    {
      if($this->require_min_level(1))
      {
       redirect(base_url($this->auth_role.'/dashboard'));
      }
      else{
          $this->logout();
      }
    }

    
    public function login()
	{
		// Method should not be directly accessible
            if($this->is_logged_in())
                redirect (base_url($this->auth_role.'/dashboard'));
		if( $this->uri->uri_string() == 'app/login')
			show_404();

		if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
			$this->require_min_level(1);

		$this->setup_login_form();
                $this->load->view('auth/header');
		$this->load->view('auth/login');
                $this->load->view('auth/footer');
	}
         
       public function registers()
	{
            $this->load->view('auth/header');
            $this->load->view('auth/register');
            $this->load->view('auth/footer');
	}
        
        public function recover()
	{
		// Load resources
		$this->load->model('auth/app_model');

		/// If IP or posted email is on hold, display message
		if( $on_hold = $this->authentication->current_hold_status( TRUE ) )
		{
			$view_data['disabled'] = 1;
		}
		else
		{
			// If the form post looks good
			if( $this->tokens->match && $this->input->post('email') )
			{
				if( $user_data = $this->app_model->get_recovery_data( $this->input->post('email') ) )
				{
					// Check if user is banned
					if( $user_data->banned == '1' )
					{
						// Log an error if banned
						$this->authentication->log_error( $this->input->post('email', TRUE ) );

						// Show special message for banned user
						$view_data['banned'] = 1;
					}
					else
					{
						/**
						 * Use the authentication libraries salt generator for a random string
						 * that will be hashed and stored as the password recovery key.
						 * Method is called 4 times for a 88 character string, and then
						 * trimmed to 72 characters
						 */
						$recovery_code = substr( $this->authentication->random_salt() 
							. $this->authentication->random_salt() 
							. $this->authentication->random_salt() 
							. $this->authentication->random_salt(), 0, 72 );

						// Update user record with recovery code and time
						$this->app_model->update_user_raw_data(
							$user_data->user_id,
							[
								'passwd_recovery_code' => $this->authentication->hash_passwd($recovery_code),
								'passwd_recovery_date' => date('Y-m-d H:i:s')
							]
						);

						// Set the link protocol
						$link_protocol = USE_SSL ? 'https' : NULL;

						// Set URI of link
						$link_uri = '<a href="'.base_url().'app/recovery_verification/' . $user_data->user_id . '/' . $recovery_code.'">Recover</a>';

						$this->load->library('email');

                                                $this->email->from('support@hisazangu.co.tz', 'Support Team');
                                                $this->email->to($user_data->email);
                                                
                                                $this->email->subject('Account Recovery');
                                                $this->email->message('Click this link '.$link_uri);

                                                $this->email->send();

						$view_data['confirmation'] = 1;
					}
				}

				// There was no match, log an error, and display a message
				else
				{
					// Log the error
					$this->authentication->log_error( $this->input->post('email', TRUE ) );

					$view_data['no_match'] = 1;
				}
			}
		}

		
            $this->load->view('auth/header');
            $this->load->view('auth/recover_form', ( isset( $view_data ) ) ? $view_data : '');
            $this->load->view('auth/footer');
		
	}
        
        
        public function recovery_verification( $user_id = '', $recovery_code = '' )
	{
		/// If IP is on hold, display message
		if( $on_hold = $this->authentication->current_hold_status( TRUE ) )
		{
			$view_data['disabled'] = 1;
		}
		else
		{
			// Load resources
			$this->load->model('auth/app_model');

			if( 
				/**
				 * Make sure that $user_id is a number and less 
				 * than or equal to 10 characters long
				 */
				is_numeric( $user_id ) && strlen( $user_id ) <= 10 &&

				/**
				 * Make sure that $recovery code is exactly 72 characters long
				 */
				strlen( $recovery_code ) == 72 &&

				/**
				 * Try to get a hashed password recovery 
				 * code and user salt for the user.
				 */
				$recovery_data = $this->app_model->get_recovery_verification_data( $user_id ) )
			{
				/**
				 * Check that the recovery code from the 
				 * email matches the hashed recovery code.
				 */
				if( $recovery_data->passwd_recovery_code == $this->authentication->check_passwd( $recovery_data->passwd_recovery_code, $recovery_code ) )
				{
					$view_data['user_id']       = $user_id;
					$view_data['username']     = $recovery_data->username;
					$view_data['recovery_code'] = $recovery_data->passwd_recovery_code;
				}

				// Link is bad so show message
				else
				{
					$view_data['recovery_error'] = 1;

					// Log an error
					$this->authentication->log_error('');
				}
			}

			// Link is bad so show message
			else
			{
				$view_data['recovery_error'] = 1;

				// Log an error
				$this->authentication->log_error('');
			}

			/**
			 * If form submission is attempting to change password 
			 */
			if( $this->tokens->match )
			{
				$this->app_model->recovery_password_change();
			}
		}
                $this->load->view('auth/header');
		$this->load->view('auth/choose_password_form', $view_data);
                $this->load->view('auth/footer');
	}
        
       
        
        
        public function logout()
	{
		$this->authentication->logout();

		// Set redirect protocol
		$redirect_protocol = USE_SSL ? 'https' : NULL;

		redirect(base_url(LOGIN_PAGE));
	}
        
        public function error404() {
            $this->load->view('auth/error404');
        }
}
