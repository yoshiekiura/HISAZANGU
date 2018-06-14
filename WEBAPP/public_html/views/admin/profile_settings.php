

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row">
                <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h3 class="title">SETTINGS</h3>
                            <!-- PAGE HEADING TAG - END -->
                        </div>
                    </div>
                </div>
                 <div class="col-md-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Basic Information</h2>                          
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                     <div class="controls"> 
                                         <input maxlength="30" value="<?php echo $profile_data->firstname;?>" type="text" name="firstname" id="field-4" placeholder="First name" class="form-control">
                                        </div> 
                                    </div>
                                </div>
                                    
                                <div class="col-md-4">
                                  <div class="form-group">
                                     <div class="controls">
                                         <input name="middlename" type="text" id="field-4" placeholder="Middle name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                     <div class="col-md-4">
                                      <div class="form-group">
                                     <div class="controls">
                                         <input type="text" name="lastname" id="field-4" placeholder="Last name" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                            </div>
                                   
                                
                                <div class="row">
                                    <div class="col-md-4">
                                     <div class="form-group">
                                          <label>Gender</label>
                                     <div class="controls">
                                         <input name="gender" tabindex="5" type="radio" id="minimal-radio-1" class="icheck-minimal-red">
                                         <label class="iradio-label form-label" for="minimal-radio-1">Female</label>
                                         
                                         <input tabindex="5" name="gender" type="radio" id="minimal-radio-1" class="icheck-minimal-red" >
                                         <label class="iradio-label form-label" for="minimal-radio-1">Male</label>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Date of Birth</label>
                                      <div class="controls">
                                         <input type="date" name="dob" id="field-4" placeholder="Birthdate" class="form-control">
                                      </div>
                                    </div>
                                    </div>
                                </div>
                             
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                    </section>
                   </div>
                <!--Second form-->
                <div class="col-lg-12">
                    <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">Authentication Settings</h2>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="option-identity-wrapper no-mb">                
                                            <div class="tab-head left15">
                                                <div class="form-group">
                                                        <span class="desc">Current Password</span>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="cpassword" placeholder="">
                                                        </div>
                                                    </div>                                                
                                                <div class="form-group">
                                                        <span class="desc">New Password</span>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="newpassword" placeholder="">
                                                        </div>
                                                    </div>                                                
                                                <div class="form-group">
                                                        <span class="desc">Confirm Password</span>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="confirm" placeholder="">
                                                        </div>
                                                    </div>
                                                <div class="col-sm-3 no-pr">
                                                    <button type="submit" class="btn btn-primary mt-30 btn-corner"><i class="fa fa-check"></i> Change Password</button>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="option-identity-wrapper no-mb">
                
                                            <div class="tab-head left15">
                                                <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                <div class="col-sm-3 no-pr">
                                                    <button type="submit" class="btn btn-primary mt-30 btn-corner"><i class="fa fa-check"></i> Change Email</button>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="option-identity-wrapper no-mb">
                
                                            <div class="tab-head left15">
                                                <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="phone" placeholder="Phone Numbe">
                                                        </div>
                                                    </div>
                                                <div class="col-sm-3 no-pr">
                                                    <button type="submit" class="btn btn-primary mt-30 btn-corner"><i class="fa fa-check"></i> Change Number</button>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                   </div>                                    
                                </div>
                    </section>
                </div>
            </div>
        </section>
