<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

                $this->force_ssl();

	}

	
	public function index()
	{
		if( $this->require_min_level(1))
		{       
                        $redirect_protocol = USE_SSL ? 'https' : NULL;

                        redirect( base_url($this->auth_role.'/dashboard'), $redirect_protocol );
                        
		}
	}
	
        public function changeproject($key) {
            $this->session->project = $this->my_auth_model->get_project_data($key);
             
                header("Location: " . base_url('admin/projects/project/'.$key));
        }
        
	public function login()
	{
		// Method should not be directly accessible
		if( $this->uri->uri_string() == 'app/login')
                    return;

		if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
			$this->require_min_level(1);

		$this->setup_login_form();
                
                $pagedata = array('title'=>'Login | Hisazangu');
                $this->load->vars($pagedata);
		$this->load->view('auth/login');
	}

	// --------------------------------------------------------------

	/**
	 * Log out
	 */
	public function logout()
	{
		$this->authentication->logout();

		// Set redirect protocol
		$redirect_protocol = USE_SSL ? 'https' : NULL;

		redirect( site_url( LOGIN_PAGE . '?' . AUTH_LOGOUT_PARAM . '=1', $redirect_protocol ) );
	}

	// --------------------------------------------------------------

	/**
	 * User recovery form
	 */
	public function recover()
	{
		// Load resources
		$this->load->model('auth/auth_model');

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
				if( $user_data = $this->auth_model->get_recovery_data( $this->input->post('email') ) )
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
						$this->auth_model->update_user_raw_data(
							$user_data->user_id,
							[
								'passwd_recovery_code' => $this->authentication->hash_passwd($recovery_code),
								'passwd_recovery_date' => date('Y-m-d H:i:s')
							]
						);

						// Set the link protocol
						$link_protocol = USE_SSL ? 'https' : NULL;

						// Set URI of link
						$link_uri = 'auth/recovery_verification/' . $user_data->user_id . '/' . $recovery_code;

						$view_data['special_link'] = anchor( 
							site_url( $link_uri, $link_protocol ), 
							site_url( $link_uri, $link_protocol ), 
							'target ="_blank"' 
						);

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

		echo $this->load->view('auth/page_header', '', TRUE);

		echo $this->load->view('auth/recover_form', ( isset( $view_data ) ) ? $view_data : '', TRUE );

		echo $this->load->view('auth/page_footer', '', TRUE);
	}

	// --------------------------------------------------------------

	/**
	 * Verification of a user by email for recovery
	 * 
	 * @param  int     the user ID
	 * @param  string  the passwd recovery code
	 */
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
			$this->load->model('auth/auth_model');

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
				$recovery_data = $this->auth_model->get_recovery_verification_data( $user_id ) )
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
				$this->auth_model->recovery_password_change();
			}
		}

		echo $this->load->view('auth/page_header', '', TRUE);

		echo $this->load->view( 'auth/choose_password_form', $view_data, TRUE );

		echo $this->load->view('auth/page_footer', '', TRUE);
	}

   public function language($param=NULL) {
        $languages = array('sw-tz','english');
        if(!empty($param) && in_array($param, $languages)){
            $this->session->set_userdata('language',$param);
        }
        
        if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        } else {
            header("Location: " . base_url());
        }    
    }
    
    public function error404() {
        $this->load->view('auth/error404',['title'=>'Page Not Found | Hisazangu']);
    }
    
    public function register() {
        $this->load->view('auth/register',['title'=>'Register | Hisazangu']);
    }
}

/* End of file Examples.php */
/* Location: /community_auth/controllers/Examples.php */
