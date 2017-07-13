<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

               <!--View thats shows how items are listed-->
                <div id="view" class="spotlight well">
                  <div class="learn container">
                   <div class="row">
                      <div class="col-md-4">
                        <h3>Don't miss out</h3>
                      </div>
                      <div class="col-md-4 col-md-offset-4">
                       <h4>Trending item</h4>
                      </div>  
                   </div><!-- ./row-->
                   
                   <div class="below row">
                    <?php 
                       foreach ($first as $row) {
                         $name = $row['name'];
                         $price = $row['price'];
                         $imgSource = $row['picture'];
                         $description = $row['description'];
                         $id = $row['serial'];

                       }

                             
                    ?>
                     <!--IMAGE COLUMN-->
                     <div class="col-md-4">
                       <img src="<?php echo base_url().$imgSource ?>" class="img-responsive img-rounded">
                     </div>
                     <!--PRODUCT DESCRIPTION AND STATS COLUMN-->
                     <div class="col-md-4">
                      
                      
                        <h4><?php echo $name; ?></h4>
                        <h5>Save more than 40%.</h5>
                        <p><?php echo $description; ?></p><br/>
                        <!--STATS1-->
                            <div class="stats-section col-md-4">
                              <span class="glyphicon glyphicon-scale"></span>Goal : 120 
                            </div>
                            <div class="lineit col-md-4">
                               Backers 142
                            </div>
                            <div class="lineit col-md-4">
                                 <b><?php echo $price; ?></b>
                            </div>  
                        <br/><br/>
                        <!--PROGRESS BAR MARKUP-->
                        <div class="progress" style="height:7px;"> 
                           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 118%;"><span class="sr-only">118% Complete</span>
                           </div><!-- ./progress-bar --> 
                        </div><br/><!-- ./progress -->
                      
                        <!--STATS-->
                        <div class="col-md-4">
                           <span class="glyphicon glyphicon-globe"></span>KwaZulu-Natal
                        </div>
                        <div class="lineit col-md-4">
                          2 Days Left
                        </div>
                        <div class="lineit col-md-4">
                        118% backed
                        </div>  
                     </div><!-- ./col-md-4 --> 

                     <!--CATEGORIES COLUMN -->
                     <div class="col-md-3 col-md-offset-1">
                       <h4><u>Category</u></h4>
                       <ul class="categoryList">
                          <li class="active"><a href="<?php echo base_url('index.php/LandingController/created_orders'); ?>">Recently Created Orders</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/display'); ?>">Technology/Gadgets</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/display'); ?>">Food/Groceries</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/display'); ?>">Car parts</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/display'); ?>">Books/Stationary</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/display'); ?>">Personal Care</a></li>
                       </ul>
                     </div><!-- ./category section -->
                     <!-- Contextual button for informational alert messages --> 
                     <!-- Where one needs to add form to update cart object -->
                     <button type="button" class="order-btn btn btn-lg cd-add-to-cart" data-price="<?php echo $price; ?>" data-product="<?php echo $name; ?>" data-productid="<?php echo $id; ?>" data-imgsource ="<?php echo $imgSource; ?>">ORDER</button> 
                   </div><!-- ./row -->
                  </div><!-- ./container -->
                    <a href="#two" class="goto-next scrolly">Next</a>
                </div><!-- ./spotlight -->
