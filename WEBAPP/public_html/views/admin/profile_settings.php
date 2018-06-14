<link href="<?php echo base_url('resources/assets/');?>node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />        
<?php if( isset($form_action)):?> 
            <div class="preloader">
                <div class="loader">
                    <div class="loader__figure"></div>
                    <p class="loader__label text-dark">Updating profile...</p>
                </div>
            </div>  
        <?php else :?>
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label text-dark">Loading profile...</p>
            </div>
        </div>   
        <?php endif;?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Account Setting</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/profile/settings');?>">Profile</a></li>
                                <li class="breadcrumb-item active">Setting</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo base_url('resources/profiles/'.$profile_data->avatar);?>" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php ucfirst($profile_data->firstname.' '.$profile_data->lastname);?></h4>
                                    <h6 class="card-subtitle"><?php echo ucfirst($auth_role);?></h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo $profile_data->email;?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $profile_data->phone;?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $profile_data->address_primary;?></h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                           <?php if( isset($form_action)):?>
                                <div class="alert <?php echo $class;?>">
                                    <?php echo $message;?>
                                </div>
                            <?php endif;?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Personal Details</h5>
                                 <?php echo form_open(base_url('admin/profile/setting'),['class'=>'form-horizontal form-material']);?>
                                    <div class="form-group">
                                        <label class="col-md-12">First Name</label>
                                        <div class="col-md-12">
                                            <input name="firstname" type="text" placeholder="First Name" required class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Middle Name</label>
                                        <div class="col-md-12">
                                            <input name="middlename" type="text" placeholder="Middle Name" class="form-control form-control-line">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input name="lastname" type="text" placeholder="Last Name" required class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Date of Birth</label>
                                        <div class="col-md-12">
                                            <input autocomplete="" id="dob" name="dob" type="text" placeholder="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input name="phone" type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">About</label>
                                        <div class="col-md-12">
                                            <textarea name="about" rows="3" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success pull-right">Update Profile</button>
                                        </div>
                                    </div>  
                                <?php echo form_close();?>
                            </div>
                        </div> 
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
<?php include 'footer.php';?>
<!-- Popup message jquery -->
        <script src="<?php echo base_url('resources/assets/');?>node_modules/moment/moment.js"></script>
        <script src="<?php echo base_url('resources/assets/');?>node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <script src="<?php echo base_url('resources/assets/');?>node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
</body>
<script>
    // MAterial Date picker 
    
    
    jQuery('#dob').datepicker({
        todayHighlight: true
    });
    
    
    
</script>
</html>