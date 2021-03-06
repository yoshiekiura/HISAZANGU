<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('resources/assets/');?>images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    
    <!-- page css -->
    <link href="<?php echo base_url('resources/template/');?>css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('resources/template/');?>css/style.min.css" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-purple card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url('resources/assets/');?>images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
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
                               
                        </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('resources/assets/');?>node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('resources/assets/');?>node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url('resources/assets/');?>node_modules/bootstrap/<?php echo base_url('resources/template/');?>js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>

</html>