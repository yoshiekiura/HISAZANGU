
<!-- BEGIN BODY -->

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="<?php echo base_url();?>resources/data/icons/padlock.png" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Login Now!</h4>
                         <h4><small>Please enter your credentials to login.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

               <div class="content-body" style="padding-top:30px">
                   
<?php

if( ! isset( $on_hold_message ) )
{
	if( isset( $login_error_mesg ) )
	{
		echo '
			<div class="alert alert-danger">
				<p>
					Invalid Username, Email Address, or Password.
				</p>
				
			</div>
		';
	}


	echo form_open( $login_url, ['class' => 'std-form'] ); 
?>

	<div>

		<label for="login_string" class="form_label">Username or Email</label>
		<input type="text" name="login_string" id="login_string" class="form_input" autocomplete="off" maxlength="255" />

		<br /> 

		<label for="login_pass" class="form_label">Password</label>
		<input type="password" name="login_pass" id="login_pass" class="form_input password" <?php 
			if( config_item('max_chars_for_password') > 0 )
				echo 'maxlength="' . config_item('max_chars_for_password') . '"'; 
		?> autocomplete="off" readonly="readonly" onfocus="this.removeAttribute('readonly');" />


		<?php
			if( config_item('allow_remember_me') )
			{
		?>

			<br />

			<label for="remember_me" class="form_label">Remember Me</label>
			<input type="checkbox" id="remember_me" name="remember_me" value="yes" />

		<?php
			}
		?>

		<p>
			<?php
				$link_protocol = USE_SSL ? 'https' : NULL;
			?>
                    <a style="color: orange" href="<?php echo site_url('app/recover', $link_protocol); ?>">
				Can't access your account?
			</a>
		</p>
                <button type="submit" class="btn btn-primary" name="submit" id="submit_button">Login</button>

	</div>
</form>

<?php

	}
	else
	{
		// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
		echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the <a href="/examples/recover">Account Recovery</a> after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
	}
?> 
                   </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="<?php echo base_url('app/recover')?>" title="Password Lost and Found">Forgot password?</a>
                    <a class="pull-right" href="<?php echo base_url('app/register')?>" title="Register">Register</a>
                </p>

            </div>
        </div>
    </div>


