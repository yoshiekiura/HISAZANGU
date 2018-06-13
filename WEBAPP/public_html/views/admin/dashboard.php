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
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL BROKERS</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash"></div>
                                    <div class="ml-auto">
                                        <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">10</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL COMPANIES</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash2"></div>
                                    <div class="ml-auto">
                                        <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">109</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL SHAREHOLDERS</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash3"></div>
                                    <div class="ml-auto">
                                        <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter"><?php echo number_format(180025,0);?></span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL ORDERS</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash4"></div>
                                    <div class="ml-auto">
                                        <h2 class="text-warning"><i class="ti-arrow-up"></i> <span class="counter">18%</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title m-b-0">ORDERS</h5>
                                            </div>
                                            <div class="card-body bg-light">
                                                <div class="d-flex no-block align-items-center">
                                                    <span><h2 class=""><?php echo date('l');?></h2><small><?php echo date('d M Y');?></small></span>
                                                    <div class="ml-auto">
                                                        <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6"><?php echo number_format(18500,0);?>K<sup>TZS</sup></span> </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div id="morris-area-chart" style="height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Feed and erning -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">OPENING BALANCE</h5>
                            </div>
                            <div class="card-body bg-light">
                                <div class="d-flex no-block align-items-center">
                                    <span><h2 class=""><?php echo date('l');?></h2><small><?php echo date('d M Y');?></small></span>
                                    <div class="ml-auto">
                                        <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6"><?php echo number_format(1850,2);?><sup>TZS</sup></span> </div>
                                </div>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">CLOSING BALANCE</h5>
                            </div>
                            <div class="card-body bg-light">
                                <div class="d-flex no-block align-items-center">
                                    <span><h2 class=""><?php echo date('l');?></h2><small><?php echo date('d M Y');?></small></span>
                                    <div class="ml-auto">
                                        <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6"><?php echo number_format(1800,2);?><sup>TZS</sup></span> </div>
                                </div>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>