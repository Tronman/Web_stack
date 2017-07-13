<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

$details = $this->session->order_details;
$location = $this->session->location;

 if (isset($details) && $location) {
  
   $name = $details['name'];
   $description = $details['description'];
   $duration = $details['duration'];
   $picture = $details['picture'];
   $date = $details['date'];
     if(isset($date)){
          $now = time(); // or your date as well
          $date = strtotime($date);
          $datediff = $date - $now;

          $days = ceil($datediff / (60 * 60 * 24));

          $percent = floor((1/5) *100);
     }
   
?>
<style>

    .thumbnail{

      line-height: 1.42857143 !important;
    }
    .progress{
      margin-top: 15px;

    }


</style>
           <div class="container text-center site-heading">
                 <h1><u>Preview Your Order</u></h1>
                 <h3>This is how your order will look like.</h3>

           </div>
                <div class="row">  
                  <div class="col-sm-4 col-lg-4 col-md-4 col-md-offset-4 col-sm-offset-4 col-lg-offset-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads').'/'.$picture ?>" class="img-responsive" alt="">
                            <div class="caption">
                                
                                <h4 class="text-center" ><?php echo strtoupper($name); ?></h4>
                                <p><?php echo $description; ?></p>
                            
                                <div class="stats-section col-md-6">
                                    <span class="glyphicon glyphicon-scale"></span>Goal : 5 
                                </div>
                                <div class="lineit col-md-6">
                                    <span class="glyphicon glyphicon-tags"></span>
                                   Backers : 1
                                </div>
                            </div><!-- ./ cap -->
                            <div class="caption">
                                <div class="progress" style="height:3px;"> 
                                       <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent?>%;"><span class="sr-only">20% Complete</span>
                                       </div><!-- ./progress-bar --> 
                                </div><br/><!-- ./progress -->
                                <div class="col-md-7 ">
                                    <span class="glyphicon glyphicon-globe"><span>
                                        <?php echo $location; ?>
                                </div>
                                <div class="lineit col-md-5">
                                   <span class="glyphicon glyphicon-hourglass"></span>
                                   DAYS LEFT: <?php echo $days; ?>
                                </div><br/>
                                <button type="button" style="margin-top: 5px;" class="order-btn btn btn-md btn-block cd-add-to-cart" data-price="<?php //echo $price; ?>" data-product="<?php //echo $name; ?>" data-productid="<?php //echo $id; ?>" data-imgsource ="<?php //echo $imgSource; ?>">ORDER</button> 
                            </div>
                            <a class="text-center" href="<?php echo base_url('index.php/LandingController/created_orders'); ?>">See other orders</a>
                            <?php } ?>

                        </div><!-- ./ thumbnail -->
                    </div><!-- ./ col-md-4 -->
             </div>
             
  <?php if (!isset($details) || !isset($location)) {
    ?>
  <div  class="spotlight well">  
   <div class="learn container row">
    <div class="col-md-10  col-md-offset-1 text-center">
      <h2>Fill in the <i><b> order,location and billing form(s) </b></i> in that order, before attempting to view this page...</h2>
    </div>
   </div> 
  </div> 
   <?php } ?>       