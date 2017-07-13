              <!-- Trending item -->
                <div id="two" class="spotlight">
                  <div class="container"> 
                   <!-- Title -->
                   <div class="row spacertitle">
                     <div class="col-lg-12">
                       <h3 class="text-center"><b>Recommended Items</b></h3>
                     </div>
                   </div>

                   
                    <div class="row text-center spacer">
                      <?php
                         foreach ($products as $item) :
                           $id = $item['serial'];
                           $page = $item['page'];
                           $name = $item['name'];
                           $price = $item['price'];
                           $description = $item['description'];
                           $imgSource = $item['picture'];
                             
                             if ($id != 1 && $page == 'front'):
                               
                      ?>
                        <div class="col-md-3 col-sm-6 hero-feature">
                            
                            <!--1st Thumbnail-->
                            <div class="thumbnail">
                               <img src="<?php echo base_url().$imgSource ?>" class="img-responsive" alt="">
                               <div class="caption">
                                  <h3><?php echo $name;?></h3>
                                  <p><?php echo $description;?></p>
                                  <div class="text-left">
                                     <span class="text-left glyphicon glyphicon-globe"></span>CT,WC
                                     <span class="glyphicon glyphicon-scale col-md-offset-4"></span>Goal : 300 
                                  </div><br/>

                                  <!--PROGRESS BAR MARKUP-->
                                  <div class="progress" style="height:7px;"> 
                                       <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"><span class="sr-only">78% Complete</span>
                                       </div><!-- ./progress-bar --> 
                                  </div><!-- ./progress --> 
                              
                                  <ul class="list-inline text-center list-unstyled">
                                      <li>20</li><span><b>Days left</b></span>
                                      <li>78%</li><span><b>Backed</b></span>
                                  </ul>
                                  <button type="button" class="order-btn btn btn-md cd-add-to-cart" data-price="<?php echo $price;?>" data-product="<?php echo $name;?>" data-imgsource="<?php echo $imgSource;?>" data-productid="<?php echo $id;?>" >ORDER</button>
                               </div><!--caption--> 
                           </div><!--thumpnail-->
                       </div><!--column-->
                      <?php
                         endif;
                         endforeach;
                      ?>
                   </div><!-- ./row -->    
                    <a href="#parallax-img" class="goto-next scrolly"></a>
                 </div><!-- ./container -->  
                </div><!-- ./spotlight -->