<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function profile_left_block(){
    $profile_data = config_item('profile_data')?>
    <div class="card">
        <div class="card-body">
            <center class="m-t-30"> <img src="<?php echo base_url('resources/profiles/'.$profile_data->avatar);?>" class="img-circle" width="150" />
                <h4 class="card-title m-t-10"><?php echo ucfirst($profile_data->firstname.' '.$profile_data->lastname);?></h4>
                <h6 class="card-subtitle"><?php echo ucfirst(config_item('auth_role'));?></h6>
                <div class="row text-center justify-content-md-center">
                    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                </div>
            </center>
        </div>
        <div>
            <hr> 
        </div>
        <div class="card-body"> <small class="text-muted">Email address </small>
            <h6><?php echo $profile_data->email;?></h6> <small class="text-muted p-t-30 db">Phone</small>
            <h6><?php echo $profile_data->phone;?></h6> <small class="text-muted p-t-30 db">Address</small>
            <h6><?php echo $profile_data->address_primary;?></h6> 
            <small class="text-muted p-t-30 db">Social Profile</small>
            <br/>
            <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
            <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
            <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
        </div>
    </div>
<?php }