

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

    <!-- END CONTAINER -->
   