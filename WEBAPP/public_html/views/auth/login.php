<!DOCTYPE html>


<head>
    <!-- 
        * @Package: Cryptonia - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (!empty($title))? $title: 'Sarah | Login'; ?></title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>resources/assets/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>resources/assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>resources/assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>resources/assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>resources/assets/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="<?php echo base_url();?>resources/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url();?>resources/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="<?php echo base_url();?>resources/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

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
                    <a class="pull-right" href="<?php echo base_url('app/create_user')?>" title="Sign Up">Sign Up</a>
                </p>

            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="<?php echo base_url();?>resources/assets/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url();?>resources/assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="<?php echo base_url();?>resources/assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>
</html>

