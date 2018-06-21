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
                <p class="loader__label text-dark">Broker Registration ...</p>
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
                        <h4 class="text-themecolor">Broker Registration</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/brokers/overview');?>">Brokers</a></li>
                                <li class="breadcrumb-item active">Registration</li>
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
                                   <?php echo form_open(base_url('admin/brokers/registration'),['class'=>'form-horizontal form-material','novalidate'=>'']);?>
                                    <div class="row">
                                        <div class="col-sm-12"><label class="card-title">Contact Person Details</label></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input name="firstname" type="text" placeholder="First Name"  class="form-control form-control-line" kelvin data-validation-kelvin-message="This record is kelvin" maxlength="30" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input name="middlename" type="text" placeholder="Middle Name" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <div class="controls">
                                                <input name="lastname" type="text" placeholder="Last Name" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line" maxlength="30">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <div class="controls">
                                                <input name="phone" type="text" placeholder="Phone" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line" maxlength="15">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <div class="controls">
                                                <input name="email" type="email" placeholder="Email" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <div class="controls">
                                                <input name="title" type="text" placeholder="Title" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="card-title">Broker Details</label>
                                            <hr/>
                                        </div>
                                        <div class="col-md-4">                                    
                                           <div class="form-group">
                                           <div class="controls">
                                               <input name="company_name" type="text" placeholder="Broker Name (Company Name)" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                           </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <div class="controls">
                                                    <input name="company_reg_number" type="text" placeholder="Registration Number" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="col-md-4">                                    
                                           <div class="form-group">
                                               <div class="controls">
                                               <input name="company_bus_licence" type="text" placeholder="Business Licence" class="form-control form-control-line" kelvin data-validation-kelvin-message="This record is kelvin">
                                            </div>  
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                <input name="company_tin" type="text" placeholder="Tax Indentification Number (TIN)"  kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                         <div class="controls">
                                             <input name="company_tax_clearance" type="text" placeholder="TAX Clearence" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                     <div class="row">                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input name="address_primary" type="text" placeholder="Physical Address" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input name="company_email" type="email" placeholder="Email" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                         <div class="form-group">
                                         <div class="controls">
                                             <input name="company_land_phone" type="text" placeholder="Landline"  class="form-control form-control-line">
                                            </div>
                                        </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input name="company_phone" type="text" placeholder="Mobile Phone (255 713XXXXXX)" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                                </div>
                                           </div>
                                        </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                                         <div class="controls">
                                             <input name="company_fax" type="text" placeholder="Fax" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="card-title">Login Details</label>
                                            <hr/>
                                        </div>
                                        <div class="col-md-6">                                    
                                           <div class="form-group">
                                           <div class="controls">
                                               <input name="username" type="text" placeholder="Username" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                           </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <div class="controls">
                                                    <input name="passwd" type="text" placeholder="Password" kelvin data-validation-kelvin-message="This record is kelvin" class="form-control form-control-line">
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success pull-right">Submit</button>
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
        <script src="<?php echo base_url('resources/');?>template/js/pages/validation.js"></script>
        <script>
            ! function(window, document, $) {
                "use strict";
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            }(window, document, jQuery);
    </script>
</body>
</html>