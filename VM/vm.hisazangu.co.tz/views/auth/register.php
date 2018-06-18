
<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">HisaZangu | Virtual Market</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="step-register">
        <div class="register-box">
            <div class="">
                
                <!-- multistep form -->
               
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                               <?php
                                      echo form_open(base_url('app/register'));
                                ?> 
                                    <div class="form-body">
                                        <center> <h4 class="card-title">SIGN UP FORM</h4></center>
                                        <?php 
                                        if(isset($errors)){?>
                                              <div class="alert alert-danger">
                                              <?php print_r($errors); ?>
                                              </div>
                                        <?php }
                                        
                                        else{?>
                                              <div class="alert alert-success">
                                              <?php print_r($success); ?>
                                              </div>
                                       <?php };?> 
                                        <hr>

                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" value="<?php echo set_value('firstname');?>" name="firstname" maxlength="30" class="form-control" placeholder="First name">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                               <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="middlename" maxlength="30" class="form-control" placeholder="Middle name">
                                                 </div>
                                            </div>

                                              <div class="col-md-4">
                                               
                                                  <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="lastname" maxlength="30" class="form-control" placeholder="Last name">
                                                 </div>

                                            </div>
                                                <div class="col-md-12">
                                           
                                              <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" placeholder="Enter Physical Address" name="address_primary" maxlength="250">
                                                </div>

                                            </div>
                                        </div>

                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                               
                                                  <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="occupation" maxlength="30" class="form-control" placeholder="Occupation">
                                                  </div>

                                            </div>

                                        
                                            <div class="col-md-4">
                                               
                                            <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="phonenumber" maxlength="30" class="form-control" placeholder="Phone Number">
                                                 </div>

                                            </div>
                                          
                                                
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <select class="form-control custom-select" name="nationality" data-placeholder="Choose a Category" tabindex="1">
                                                        <option>Nationality</option>
                                                        <option value="Category 1">Tanzania</option>
                                                        <option value="Category 2">Kenya</option>
                                                        <option value="Category 3">Uganda</option>
                                                     
                                                    </select>
                                                </div>
                                            </div>

                                              </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                               
                                                  <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="account" maxlength="30" class="form-control" placeholder="Bank account Number:">
                                                 </div>

                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                               
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <select class="form-control custom-select" name="bank" data-placeholder="Choose a Category" tabindex="1">
                                                        <option>Select Bank name</option>
                                                        <option value="Category 1">AKIBA</option>
                                                        <option value="Category 2">CRDB</option>
                                                        <option value="Category 3">NBC</option>
                                                     
                                                    </select>
                                                </div>

                                            </div>
                                              <div class="col-md-4">
                                               
                                            <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="branch" maxlength="30" class="form-control" placeholder="Branch name">
                                                 </div>

                                            </div>
                                            <!--/span-->
                                        </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                 <label class="control-label"></label>
                                 <select class="form-control custom-select" name="idtype" data-placeholder="Choose a Category" tabindex="1">
                                         <option>Identity type</option>
                                         <option value="Category 1">Passport</option>
                                         <option value="Category 2">National ID</option>
                                         <option value="Category 3">Driving Licence</option>
                                 
                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                               
                                                    <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="idnumber" maxlength="30" class="form-control" placeholder="Identity number">
                                                    </div>

                                            </div>
                                             <div class="col-md-4">
                                               
                                                    <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="email" name="email" maxlength="30" class="form-control" placeholder="Email">
                                                    </div>

                                            </div>
                                              
                                 
                                            <!--/span-->
                                        </div>
                                        
                                          <div class="row">
                                            <div class="col-md-4">
                                               
                                                    <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="username" maxlength="30" class="form-control" placeholder="Username">
                                                    </div>

                                            </div>

                                        
                                            <div class="col-md-4">
                                               
                                            <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="password" name="passwd" maxlength="30" class="form-control" placeholder="Password">
                                                 </div>

                                            </div>
                                          
                                            <div class="col-md-4">
                                               
                                            <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="password" name="cpasswd" maxlength="30" class="form-control" placeholder="Confirm password">
                                                 </div>

                                            </div>
                                                
                                       

                                              </div>

                                         <div class="form-group">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox1" type="checkbox" name="agreebox">
                                                <label for="checkbox1">Accept terms and conditions</label>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Register</button>
                                        <a href="<?php echo base_url();?>login" class="btn btn-info">Back to Login</a>
                                    </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                
                
                
                
                
                <div class="clear"></div>
            </div>
        </div>
    </section>
  