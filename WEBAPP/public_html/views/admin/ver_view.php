
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="<?php echo base_url('dashboard'); ?>">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    
                    
                    <li class="open">
                        <a href="#">
                           
                        <i class="fa fa-comments"></i>
                            <span class="title">News</span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo base_url('news'); ?>"> News list</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('news/create_news'); ?>">Create News</a>
                            </li>
                        </ul>
                        </li>
                        
                    <li class="">
                        <a href="<?php echo base_url('news/myinterface'); ?>">
                            <i class="fa fa-camera"></i>
                            <span class="title">Interface</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- MAIN MENU - END -->



        </div>
        <!--  SIDEBAR - END -->


       