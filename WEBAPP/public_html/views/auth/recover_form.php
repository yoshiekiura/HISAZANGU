<!DOCTYPE html>


<head>
    <!-- 
        * @Package: Cryptonia - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (!empty($title))? $title: 'Sarah | Recover'; ?></title>
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
                         <h4 class="bold color-white">Account Recovery</h4>
                         <h4><small>Please enter your email address.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">
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
					
					<div>

						<?php
							// EMAIL ADDRESS *************************************************
							echo form_label('Email Address','email', ['class'=>'form_label'] );

							$input_data = [
								'name'		=> 'email',
								'id'		=> 'email',
								'class'		=> 'form_input',
								'maxlength' => 255
							];
							echo form_input($input_data);
						?>

					</div>
				</fieldset>
				<div>
					<div>

						<?php
							// SUBMIT BUTTON **************************************************************
							$input_data = [
								'name'  => 'submit',
								'id'    => 'submit_button',
								'value' => 'Send Email',
                                                                'class' => 'btn btn-danger'
							];
							echo form_submit($input_data);
						?>

					</div>
				</div>
			</div>
		</form>
                
<?php }?>
	
                    </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="<?php echo base_url(LOGIN_PAGE)?>" title="Sign Up">Login</a>
                    <a class="pull-right" href="<?php echo base_url('app/register')?>" title="Sign Up">Sign Up</a>
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