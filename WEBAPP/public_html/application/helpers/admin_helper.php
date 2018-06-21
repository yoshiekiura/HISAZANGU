<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function ribbon($params=NULL){?>
           
    <div class="m-subheader-search">
        <h2 class="m-subheader-search__title">
               <?php echo  $params['default_project']->project_name;?>  
        </h2>
    </div>
<?php }