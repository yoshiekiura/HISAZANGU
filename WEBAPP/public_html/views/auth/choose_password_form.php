<!DOCTYPE html>


<head>
    <!-- 
        * @Package: Cryptonia - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (!empty($title))? $title: 'Sarah | Recovery'; ?></title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>public/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>public/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>public/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>public/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="<?php echo base_url();?>public/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url();?>public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">    
                <div class="login-form-header">
                     <img src="<?php echo base_url();?>public/data/icons/padlock.png" alt="login-icon" style="max-width:64px">
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
                    <a class="pull-left" href="<?php echo base_url('app/register')?>" title="Sign Up">Sign Up</a>
                    <a class="pull-right" href="<?php echo base_url(LOGIN_PAGE)?>" title="Signin">Login</a>
                    
                </p>

            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="<?php echo base_url();?>public/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url();?>public/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>public/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url();?>public/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>public/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url();?>public/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="<?php echo base_url();?>public/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>
</html>

