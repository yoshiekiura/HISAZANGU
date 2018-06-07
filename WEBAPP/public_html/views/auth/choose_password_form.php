

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="<?php echo base_url();?>resources/data/icons/padlock.png" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Account Recovery</h4>
                         <h4><small>Enter your new password.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

               <div class="content-body" style="padding-top:30px">
                   
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

$showform = 1;

if( isset( $validation_errors ) )
{
	echo '
		<div class="alert alert-danger">
			<p>
				The following error occurred while changing your password:
			</p>
			<ul>
				' . $validation_errors . '
			</ul>
			<p>
				PASSWORD NOT UPDATED
			</p>
		</div>
	';
}
else
{
	$display_instructions = 1;
}

if( isset( $validation_passed ) )
{
	echo '
		<div class="alert alert-success">
			<p>
				You have successfully changed your password.
			</p>
			<p>
				You can now <a href="/' . LOGIN_PAGE . '">login</a>
			</p>
		</div>
	';

	$showform = 0;
}
if( isset( $recovery_error ) )
{
	echo '
		<div class="alert alert-danger">
			<p>
				No usable data for account recovery.
			</p>
			<p>
				Account recovery links expire after 
				' . ( (int) config_item('recovery_code_expiration') / ( 60 * 60 ) ) . ' 
				hours.<br />You will need to use the 
				<a href="/examples/recover">Account Recovery</a> form 
				to send yourself a new link.
			</p>
		</div>
	';

	$showform = 0;
}
if( isset( $disabled ) )
{
	echo '
		<div class="alert alert-danger">
			<p>
				Account recovery is disabled.
			</p>
			<p>
				You have exceeded the maximum login attempts or exceeded the 
				allowed number of password recovery attempts. 
				Please wait ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' 
				minutes, or contact us if you require assistance gaining access to your account.
			</p>
		</div>
	';

	$showform = 0;
}
if( $showform == 1 )
{
	if( isset( $recovery_code, $user_id ) )
	{
		if( isset( $display_instructions ) )
		{
			if( isset( $username ) )
			{
				echo '<p>
					Username: <b>' . $username . '</b><br />
				</p>';
			}
			else
			{
				echo '<p>Please change your password now:</p>';
			}
		}

		?>
			<div id="form">
				<?php echo form_open(); ?>
					<fieldset>
						
						<div>

							<?php
								// PASSWORD LABEL AND INPUT ********************************
								echo form_label('Password','passwd', ['class'=>'form_label']);

								$input_data = [
									'name'       => 'passwd',
									'id'         => 'passwd',
									'class'      => 'form_input password',
									'max_length' => config_item('max_chars_for_password')
								];
								echo form_password($input_data);
							?>

						</div>
						<div>

							<?php
								// CONFIRM PASSWORD LABEL AND INPUT ******************************
								echo form_label('Confirm Password','passwd_confirm', ['class'=>'form_label']);

								$input_data = [
									'name'       => 'passwd_confirm',
									'id'         => 'passwd_confirm',
									'class'      => 'form_input password',
									'max_length' => config_item('max_chars_for_password')
								];
								echo form_password($input_data);
							?>

						</div>
					</fieldset>
					<div>
						<div>

							<?php
								// RECOVERY CODE *****************************************************************
								echo form_hidden('recovery_code',$recovery_code);

								// USER ID *****************************************************************
								echo form_hidden('user_identification',$user_id);

								// SUBMIT BUTTON **************************************************************
								$input_data = [
									'name'  => 'form_submit',
									'id'    => 'submit_button',
									'value' => 'Change Password',
                                                                        'class' => 'btn btn-danger'
								];
								echo form_submit($input_data);
							?>

						</div>
					</div>
				</form>
			</div>
		<?php
	}  
}
?>
                   </div>
                </div>
                
                <p id="nav">
                    <a class="pull-left" href="<?php echo base_url('app/register')?>" title="Register">Register</a>
                    <a class="pull-right" href="<?php echo base_url(LOGIN_PAGE)?>" title="Signin">Login</a>
                    
                </p>

            </div>
        </div>
    </div>
