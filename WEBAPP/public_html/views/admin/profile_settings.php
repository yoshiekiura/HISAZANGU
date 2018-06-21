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
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/profile');?>">Profile</a></li>
                                <li class="breadcrumb-item active">Setting</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-xlg-3 col-md-4">
                        <?php profile_left_block();?>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-9 col-xlg-9 col-md-8">
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
                                            <input value="<?php echo $profile_data->firstname;?>" maxlength="30" name="firstname" type="text" placeholder="First Name" required class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Middle Name</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $profile_data->middlename;?>" maxlength="30" name="middlename" type="text" placeholder="Middle Name" class="form-control form-control-line">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $profile_data->lastname;?>" maxlength="30" name="lastname" type="text" placeholder="Last Name" required class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Date of Birth</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $profile_data->dob;?>" autocomplete="" id="dob" name="dob" type="date" placeholder="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $profile_data->phone;?>" maxlength="15" name="phone" type="text" placeholder="Phone" class="form-control form-control-line">
                                        </div>
                                    </div>                                
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $profile_data->address_primary;?>" maxlength="200" name="address_primary" type="text" placeholder="Primary Address" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">About</label>
                                        <div class="col-md-12">
                                            <textarea maxlength="200" name="about" rows="3" class="form-control form-control-line"><?php echo nl2br($profile_data->about);?></textarea>
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
</html>