<!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo base_url('resources/profiles/'.$profile_data->avatar);?>" alt="user-img" class="img-circle"><span class="hide-menu"><?php echo $profile_data->firstname.' '.$profile_data->lastname;?></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/profile');?>"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="<?php echo base_url('admin/profile/setting');?>"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="<?php echo base_url('app/logout');?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Brokers</span></a>
                            <ul aria-expanded="false" class="collapse"> 
                                <li><a href="<?php echo base_url('admin/brokers/overview');?>">Overview</a></li>
                                <li><a href="<?php echo base_url('admin/brokers/registration');?>">Registration</a></li>                                 
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->