
<body class="skin-default-dark card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Hisa Zangu</p>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url();?>resources/assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    
<!--<form class="form-horizontal form-material" id="loginform" >-->
<h3 class="box-title m-b-20">Recovery Account</h3>
                   
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
				<a href="/app/recover">Account Recovery</a> form 
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
						
						<div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input class="form-control" name="passwd" type="password" required="" placeholder="New Password"> </div>
                                                </div>
						
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input class="form-control" name="passwd_confirm" type="password" required="" placeholder="Confirm Password"> </div>
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
                                                                        'class' => 'btn btn-success'
								];
								echo form_submit($input_data);
							?>

						</div>
					</div>
                            <br />
                            <div class="form-group row">
                            <div class="col-md-12">
                                <a href="<?php echo base_url('app/register')?>" title="Register" class="text-info pull-left">
                                        <i class="fa fa-user m-r-5"></i> Register</a>
                                        
                                <a href="<?php echo base_url(LOGIN_PAGE)?>" title="Sign In" class="text-success pull-right">
                                        <i class="fa fa-lock m-r-5"></i> Login</a> 
                                   
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

            </div>
        </div>
    </div>
