

<body class="skin-purple card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Login</p>
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
<h3 class="box-title m-b-20">Sign In</h3>
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

		<div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="login_string" required="" placeholder="Username"> </div>
                </div>

		<br /> 

		<div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="login_pass" type="password" required="" placeholder="Password"> </div>
                </div>


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
                    
                 <button name="submit" class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                 
                 <div class="form-group row">
                            <div class="col-md-12">
                                <a href="<?php echo base_url('app/recover')?>" title="Can't access your account?" class="text-dark pull-left">
                                        <i class="fa fa-lock m-r-5"></i> Forgot password?</a> 
                                    
                                    <a href="<?php echo base_url('app/register')?>" title="Register" class="text-success pull-right">
                                        <i class="fa fa-user m-r-5"></i> Sign Up</a> 
                                </div> 
                            </div>
                        </div>
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


            </div>
     
               
                </div>
            </div>
        </div>
    </section>
    
   