<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI not normally available in config files
$CI =& get_instance();

// Load the external model for validation of passwords
$CI->load->model('auth/validation_callables');

// Login ---------------------------
$config['login_rules'] = [
	[
		'field' => 'login_string',
		'label' => 'USERNAME OR EMAIL ADDRESS',
		'rules' => 'trim|required|max_length[255]' /* Replace max_length w/ valid_email is site not using usernames */
	],
	[
		'field' => 'login_pass',
		'label' => 'PASSWORD',
		'rules' => [
            'trim',
            'required',
            [ 
                '_check_password_strength', 
                [ $CI->validation_callables, '_check_password_strength' ] 
            ]
        ]
	]
];

/* End of file login.php */
/* Location: /community_auth/config/form_validation/auth/login.php */