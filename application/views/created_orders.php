<?php

   defined('BASEPATH') OR exit('No direct script access allowed');
   
    
?>
<style>

    .thumbnail{

      line-height: 1.3 !important;
    }
    .progress{
      margin-top: 5px;

    }


</style>


<!-- Page Content -->
    <div class="container text-center">
        <h1><u>Recently Created Orders</u></h1>
        <h3><u>Get Black Friday Prices Everyday</u></h3>
           
        <div class="row">
            <?php
              
                       foreach ($demand_orders as $order) {
       
                             $serial = $order['serial'];
                             $item_name = $order['item_name'];
                             $item_description = $order['item_description'];
                             $picture = $order['picture'];
                             $date = $order['order_date'];
                             $duration = $order['duration'];
                             $location = $order['location'];

                             if(isset($date)){
                                    $now = time(); // or your date as well
                                    $date = strtotime($date);
                                    $datediff = $date - $now;

                                    $days = ceil($datediff / (60 * 60 * 24));

                                   // $percent = floor((1/5) *100);
                             }


            ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads').'/'.$picture ?>" class="img-responsive" alt="">
                            <div class="caption">
                                
                                <h4><?php echo $item_name; ?></h4>
                                <p><?php echo $item_description; ?></p>
                            
                                <div class="stats-section col-md-6">
                                    <span class="glyphicon glyphicon-scale"></span>Goal : 5 
                                </div>
                                <div class="lineit col-md-6">
                                    <span class="glyphicon glyphicon-tags"></span>
                                   Backers 
                                </div>
                            </div><!-- ./ cap -->
                            <div class="caption">
                                <div class="progress" style="height:7px;"> 
                                       <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20% Complete</span>
                                       </div><!-- ./progress-bar --> 
                                </div><br/><!-- ./progress -->
                                <div class="col-md-7 ">
                                    <span class="glyphicon glyphicon-globe"><span>
                                      <?php echo $location;?>
                                </div>
                                <div class="lineit col-md-5">
                                   <span class="glyphicon glyphicon-hourglass"></span>
                                   DAYS LEFT: <?php echo $days; ?>
                                </div><br/>
                                <button type="button" style="margin-top: 5px;" class="order-btn btn btn-md btn-block cd-add-to-cart" data-price="0" data-page = "demand" data-product="<?php echo $item_name; ?>" data-productid="<?php echo $serial; ?>" data-imgsource ="<?php echo $picture; ?>">ORDER</button> 
                            </div>

                        </div><!-- ./ thumbnail -->
                    </div><!-- ./ col-md-4 -->

                    <?php }?>
 </div><!--./row-items-->
</div><!-- ./container -->

      