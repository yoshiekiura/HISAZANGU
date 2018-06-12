

<body class="skin-purple card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Recover Password</p>
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
if( isset( $disabled ) )
{
	echo '
		<div class="alert alert-danger">
			<p>
				Account Recovery is Disabled.
			</p>
			<p>
				If you have exceeded the maximum login attempts, or exceeded
				the allowed number of password recovery attempts, account recovery 
				will be disabled for a short period of time. 
				Please wait ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' 
				minutes, or contact us if you require assistance gaining access to your account.
			</p>
		</div>
	';
}
else if( isset( $banned ) )
{
	echo '
		<div class="alert alert-danger">
			<p>
				Account Locked.
			</p>
			<p>
				You have attempted to use the password recovery system using 
				an email address that belongs to an account that has been 
				purposely denied access to the authenticated areas of this website. 
				If you feel this is an error, you may contact us  
				to make an inquiry regarding the status of the account.
			</p>
		</div>
	';
}
else if( isset( $confirmation ) )
{
	echo '
		<div class="alert alert-success">
		
			
			<p>
				"We have sent you an email with instructions on how 
				to recover your account."
			</p>
			
		</div>
	';
}
else if( isset( $no_match ) )
{
	echo '
		<div class="alert alert-danger">
			<p class="feedback_header">
				Supplied email did not match any record.
			</p>
		</div>
	';

	$show_form = 1;
}
else
{
	$show_form = 1;
}
if( isset( $show_form ) )
{
	?>

		 <?php echo form_open(); ?>
			<div>
				<fieldset>
					
                              <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" name="email" type="email" required="" placeholder="Enter Email"> </div>
                                </div>
				</fieldset>
				<div>
                                    <div class="">

						<?php
							// SUBMIT BUTTON **************************************************************
							$input_data = [
								'name'  => 'submit',
								'id'    => 'submit_button',
								'value' => 'Send Email',
                                                                'class' => 'btn btn-success btn-rounded'
							];
							echo form_submit($input_data);
						?>

					</div>
				</div>
			</div>
                        
                 <br />
                 <div class="form-group row">
                            <div class="col-md-12">
                                <a href="<?php echo base_url(LOGIN_PAGE)?>" title="Sign In" class="text-dark pull-left">
                                        <i class="fa fa-lock m-r-5"></i> Login</a> 
                                    
                                    <a href="<?php echo base_url('app/register')?>" title="Register" class="text-success pull-right">
                                        <i class="fa fa-user m-r-5"></i> Register</a> 
                                </div> 
                            </div>
		</form>
                 
<?php }?>
	
                    </div>
                </div>
            </div>
        </div>
    </div>

   