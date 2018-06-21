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
                        <h4 class="text-themecolor">Profile</h4>
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
                                <h5 class="card-title">Profile Details</h5>
                                 
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