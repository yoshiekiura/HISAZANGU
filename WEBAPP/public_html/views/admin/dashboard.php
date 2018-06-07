<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
        * @Package: Cryptonia - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (!empty($title))? $title: 'Sarah | Dashboard'; ?></title>
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
    <link href="<?php echo base_url();?>resources/assets/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="<?php echo base_url();?>resources/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url();?>resources/assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="<?php echo base_url();?>resources/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>resources/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
    
    <!--sweetalert link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <style>
  .sweet-alert button.cancel
      {
            background-color: red;
            color: white;
    }
    </style>
    
    
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="<?php echo base_url();?>resources/data/profile/profile.jpg" alt="user-image" class="img-circle img-inline">
                            <span> <?php echo $this->auth_username;?> <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="account-confirmation.html">
                                    <i class="fa fa-wrench"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="ui-profile.html">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="ui-support.html">
                                    <i class="fa fa-info"></i> Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="<?php echo base_url('app/logout');?>">
                                     <i class="fa fa-lock"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="open">
                        <a href="index-dashboard.html">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index-trading-view.html">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Trading View</span>
                        </a>
                    </li>
                  
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
        <!--  SIDEBAR - END -->

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Dashboard</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <section class="box nobox marginBottom0">
                        <div class="content-body">
                            <div class="row">
                                 <div class="col-lg-12 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <div class="icon-after cc DASH-alt"></div>
                                        <i class='pull-left cc DASH-alt icon-md icon-primary mt-10'></i>
                                        <div class="stats">
                                            <form method="post">
                                               
                                                <h3>Select years</h3>
                                                <select class="form-control" name="years">
                                                     <option name="years"> --Select-- </option>   
                                                    <?php 

                                                    for($i=1985; $i<=2018; $i++)
                                                    {

                                                        echo "<option value=".$i.">".$i."</option>";
                                                    }
                                                    ?> 
                                                        
                                                    </select> 
                                                <br />
                                                
                                                <input type="hidden" name="p_id" id="p_id" value="">
                                                <button class="btn btn-success" class="form-control" name="archive" type="submit" onclick="archiveFunction()">
                                                 Delete
                                                </button>
                                                
                                            </form>
                                            
                                            <script>
                                                function archiveFunction() {
                                                    event.preventDefault(); // prevent form submit
                                                    var form = event.target.form; // storing the form
                                                            swal({
                                                                    title: 'Are you sure?',
                                                                    text: "It will be deleted permanently!",
                                                                    type: 'warning',
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: '#4CAF50',
                                                                    cancelButtonColor: '#d33',
                                                                    confirmButtonText: 'Yes, delete it!',
                                                                    closeOnConfirm: false,
                                                                    closeOnCancel: false
                                                                   },
                                                    function(isConfirm){
                                                      if (isConfirm)
                                                      {
                                                         swal("Deleted!", "Your file has been deleted.", "success"); 
                                                      } 
                                                      else
                                                      {
                                                        swal("Cancelled", "Your imaginary file is not deleted :)", "error");
                                                      }
                                                    });
                                                    }
                                            </script>
                                            


        


                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            <!-- End .row -->
                        </div>
                    </section>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->


            </div>
        </section>
        <!-- END CONTENT -->
        <div class="page-chatapi hideit">

            <div class="search-bar">
                <input type="text" placeholder="Search" class="form-control">
            </div>

            <div class="chat-wrapper">

                <h4 class="group-head">Favourites</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_1' data-user-id='1'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Joge Lucky</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_2' data-user-id='2'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Folisise Chosiel</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_3' data-user-id='3'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Aron Gonzalez</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>

                <h4 class="group-head">More Contacts</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_4' data-user-id='4'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Chris Fox</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_5' data-user-id='5'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Mogen Polish</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_6' data-user-id='6'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Smith Carter</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_7' data-user-id='7'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Amilia Gozenal</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_8' data-user-id='8'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Tahir Jemyship</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_9' data-user-id='9'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Johanson Wright</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_10' data-user-id='10'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Loni Tindall</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_11' data-user-id='11'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Natcho Herlaey</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_12' data-user-id='12'>
                        <div class="user-img">
                            <a href="#"><img src="<?php echo base_url();?>resources/data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Shakira Swedan</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="chatapi-windows ">

        </div>
    </div>
    <!-- END CONTAINER -->
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

    <script src="<?php echo base_url();?>resources/assets/plugins/echarts/echarts-custom-for-dashboard.js"></script>

    <script src="<?php echo base_url();?>resources/assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>resources/assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>resources/assets/js/chart-flot.js"></script>

    <script src="<?php echo base_url();?>resources/assets/plugins/morris-chart/js/raphael-min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/plugins/morris-chart/js/morris.min.js"></script>
    <script src="<?php echo base_url();?>resources/assets/js/chart-morris.js"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="<?php echo base_url();?>resources/assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>
