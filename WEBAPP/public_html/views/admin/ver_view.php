
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="open">
                        <a href="<?php echo base_url('admin/dashboard'); ?>"">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="<?php echo base_url('admin/settings'); ?>"">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Settings</span>
                        </a>
                    </li>
                  
                  <li class="open">
                        <a href="#">
                           
                        <i class="fa fa-group"></i>
                            <span class="title">Brokers</span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo base_url('admin/brokers'); ?>"> Overview</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/brokers/register'); ?>">Registration</a>
                            </li>
                        </ul>
                        </li>
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
        <!--  SIDEBAR - END -->