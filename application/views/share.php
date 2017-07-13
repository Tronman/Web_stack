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
<!--View thats shows how items are listed-->
                <div id="view" class="spotlight well">
                  <div class="form-border learn container">
                   <div class="row">
                      <div class="col-md-4">
                        <h3>Don't miss out</h3>
                      </div>
                      <div class="col-md-4 col-md-offset-4">
                       <h3>Newly created order</h3>
                      </div>  
                   </div><!-- ./row-->
                   
                   <div class="below row">

                 
                     <!--IMAGE COLUMN-->
                     <div class="col-md-4">
                       <img src="<?php echo base_url('uploads').'/'.$picture ?>" class="img-responsive img-rounded">
                     </div>
                     <!--PRODUCT DESCRIPTION AND STATS COLUMN-->
                     <div class="col-md-5">
                      
                      
                        <h4><?php echo strtoupper($name); ?></h4>
                        
                        <p><?php echo $description;?></p><br/>
                        <!--STATS1-->
                            <div class="stats-section col-md-4">
                              <span class="glyphicon glyphicon-scale"></span>Goal : 5 
                            </div>
                            <div class="lineit col-md-4">
                            <span class="glyphicon glyphicon-thumbs-up"></span> 	
                               Backers : 1
                            </div>
                            <div class="lineit col-md-4">
                                <span class="glyphicon glyphicon-tags"></span> 	
                                <?php echo $percent; ?>%
                            </div>    
                        <br/><br/>
                        <!--PROGRESS BAR MARKUP-->
                        <div class="progress" style="height:7px;"> 
                           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent?>%"><span class="sr-only">118% Complete</span>
                           </div><!-- ./progress-bar --> 
                        </div><br/><!-- ./progress -->
                      
                        <!--STATS-->
                        <div class="col-md-8">
                           <span class="glyphicon glyphicon-globe"></span>
                           <?php echo strtoupper($location);?> 
                        </div>
                        <div class="lineit col-md-4">
                           <span class="glyphicon glyphicon-hourglass"></span>Days left :	
                           <?php echo $days; ?> 
                        </div>
                        
                     </div><!-- ./col-md-4 --> 

                       <button type="button" class="order-btn btn btn-lg" style="margin: 85px;">ORDER</button> 

                     <!-- Contextual button for informational alert messages --> 
                     <!-- Where one needs to add form to update cart object -->
                     </div><!-- ./row -->
                  </div><!-- ./container -->
                    
                </div><!-- ./spotlight -->
   <?php }if (!isset($details) || !isset($location)) {
    ?>
  <div  class="spotlight well">  
   <div class="learn container row">
   	<div class="col-md-10  col-md-offset-1 text-center">
      <h2>Fill in the <i><b> order,location and billing form(s) </b></i> in that order, before attempting to view this page...</h2>
    </div>
   </div> 
  </div> 
   <?php } ?>
               