<!DOCTYPE html>


<head>
    <!-- 
        * @Package: Cryptonia - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (!empty($title))? $title: 'Sarah | Register'; ?></title>
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
            <div id="login" class="login loginpage col-lg-offset-2 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-8">    
                <div class="login-form-header">
                     <img src="<?php echo base_url();?>public/data/icons/signup.png" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Signup Now!</h4>
                         <h4><small>Please enter your data to register.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">

                        <form >
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="col-lg-4 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">FIRST NAME</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="fname">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">MIDDLE NAME</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="mname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">LAST NAME</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="lname">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            
                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <div class="controls">
                                                <textarea class="form-control autogrow" placeholder="" name="address" id="field-7"></textarea>
                                            </div>
                                        </div>
                                </div>
                            </div>
                             
                            
                            
                             <div class="row">
                             <div class="col-xs-12">
                                      <div class="col-lg-4 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">PHONE NUMBER</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">EMAIL</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="email">
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">OCCUPATION</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="occupation">
                                            </div>
                                        </div>
                                    </div>
                             </div>
                             </div>
                            
                            
                            
                            
                                    
                             <div class="row">
                             <div class="col-xs-12">
                                      <div class="col-lg-4 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">NATIONALITY</label>
                                            <div class="controls">
                                              <select class="form-control" name="nationality">
                                                <option value="">-- select one --</option>
                                                <option value="tanzanian">Tanzanian</option>
                                              </select> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">ID TYPE</label>
                                            <div class="controls">
                                                <select class="form-control" name="idtype">
                                                    <option value="">-- select one --</option>
                                                    <option>Passport</option>
                                                    <option>National ID</option>
                                                    <option>Driving license</option>
                                                    <option>Voting ID</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">ID NUMBER</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="idno">
                                            </div>
                                        </div>
                                    </div>
                             </div>
                             </div>
                            
                            
                            <div class="row">
                             <div class="col-xs-12">
                                      <div class="col-lg-4 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">BANK NAME</label>
                                            <div class="controls">
                                                <select class="form-control" name="bank">
                                                    <option value="">-- select one --</option>
                                                    <option>CRDB</option>
                                                    <option>DTB</option>
                                                    <option>EXIM</option>
                                                    <option>NBC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">BRANCH NAME</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="branch">
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-lg-4 no-pr">
                                        <div class="form-group">
                                            <label class="form-label">ACCOUNT NUMBER</label>
                                            <div class="controls">
                                                 <input  class="form-control" id="field-12" placeholder=" " name="account">
                                            </div>
                                        </div>
                                    </div>
                             </div>
                             </div>
                            
                            
                            <div class="row">
                             <div class="col-xs-5">
                             <input onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms" type="checkbox" required name="terms"> I accept the Terms and Conditions.                                    
                            </div>
                              
                                    <div class="pull-right">
                                        <button class="btn btn-primary mt-10 btn-corner right-15">Sign up</button>
                                        <a href="<?php echo base_url(LOGIN_PAGE)?>" class="btn mt-10 btn-corner signup">Login</a>
                                    </div>
                                 </div> 
                                </div>
                            </div>
                        </form>
                        
<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
                        
                </div>
                </div>


            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
   
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

