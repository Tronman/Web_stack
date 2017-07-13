<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
               <!-- One -->
                <div id="one" class="spotlight well">
                  <div class="learn container">
                    <div class="row">
                       <div class="col-md-12">
                         <h2 class="align text-muted"><u><b>ITS EASY AS 1234...</b></u></h2>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('asset/images/ppl.png')?>" class=".spacer img-rounded">
                          <h3><u>1.Aggregate</u></h3>
                          <br/>
                          <p>Suppliers offer <strong>bulk buying discounts</strong> to customers that buy a large number of items at one go.</p>
                          <p>Our app helps indivisuals qualify for such <strong>savings</strong> by combining their orders into a single order.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo base_url('asset/images/unlock.png')?>" class=".spacer img-rounded">
                            <h3><u>2.Unlock</u></h3>
                            <br/>
                          <p>Each item we post has a minimum number of orders that it must reach before we can process it.</p>
                          <p><strong>To unlock an order a minimum goal must be reached.</strong></p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo base_url('asset/images/pay.png')?>" class=".spacer img-rounded">
                            <h3><u>3.Pay</u></h3>
                            <br/>
                          <p>Once a goal is reached, we charge customers and process their orders as a single buy.</p>
                          <p>We offer a <strong>varied selection of payment options</strong> that will suit you.</p>
                        </div>
                        <div class="col-md-3">
                             <img src="<?php echo base_url('asset/images/box.png')?>" class=".spacer img-rounded">
                             <h3><u>4.Collect</u></h3>
                             <br/>
                          <p>We attach delivery location(s) and pickup times to each item.</p>  
                          <p>This helps <strong>avoid extra costs</strong> associated with last mile delivery and storage; we deliver at central locations that are in close proximity to you.</p>
                        </div>
                        <div class="col-md-12 text-center">
                          <h3 class="text-highlight">AGGREGATE, UNLOCK, PAY AND COLLECT <b class="complementColor">DISCOUNTS.</b></h3>  
                        </div>
                    </div>
                  </div>  
                    <a href="#view" class="goto-next scrolly">Next</a>
                </div>
                
                <!--Main View-->
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
                     <!--IMAGE COLUMN-->
                     <div class="col-md-4">
                       <img src="<?php echo base_url('asset/images/mac5.jpg')?>" class="img-responsive img-rounded" data-imagezoom="true">
                     </div>
                     <!--PRODUCT DESCRIPTION AND STATS COLUMN-->
                     <div class="col-md-4">
                        <h4>MacBook Air</h4>
                        <h5>Save more than 40%.</h5>
                        <p>The litest Mac by far,it comes in the traditional shiny white colour.</p><br/>
                        <!--STATS1-->
                            <div class="stats-section col-md-4">
                              <span class="glyphicon glyphicon-scale"></span>Goal : 120 
                            </div>
                            <div class="lineit col-md-4">
                               Backers 142
                            </div>
                            <div class="lineit col-md-4">
                                 <b>R7000,00</b>
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
                          <li class="active"><a href="<?php echo base_url('index.php/LandingController/displayCategory'); ?>">Technology/Gadgets</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/displayCategory'); ?>">Food/Groceries</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/displayCategory'); ?>">Car parts</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/displayCategory'); ?>">Books/Stationary</a></li>
                          <li><a href="<?php echo base_url('index.php/LandingController/displayCategory'); ?>">Personal Care</a></li>
                       </ul>
                     </div><!-- ./category section -->
                     <!-- Contextual button for informational alert messages --> 
                     <button type="button" class="btn order-btn btn-lg cd-add-to-cart" data-price="7000" data-product="Mac Book Pro" data-imgsource ="mac5.jpg">ORDER</button> 
                   </div><!-- ./row -->
                  </div><!-- ./container -->
                    <a href="#two" class="goto-next scrolly">Next</a>
                </div><!-- ./spotlight -->

                <!--Cart-->
          <!--<div class="cd-cart-container empty">
                    <a href="#" class="cd-cart-trigger">
                         Cart
                      <ul class="count"> <!-- cart items count -->
                    <!--  <li>0</li>
                         <li>0</li>
                      </ul> <!-- .count -->
                  <!-- </a>

                    <div class="cd-cart">
                        <div class="wrapper">
                           <header>
                                <h2>Cart</h2>
                                <span class="undo">Item removed. <a href="#">Undo</a></span>
                           </header>
      
                        <div class="body">
                           <ul>
                           <!-- products added to the cart will be inserted here using JavaScript -->
                      <!--     </ul>
                        </div>

                         <footer>
                             <a href="#" class="checkout btn"><em>Checkout - $<span>0</span></em></a>
                         </footer>
                       </div><!-- ./wrapper -->
                <!--</div> <!-- .cd-cart -->
               <!-- </div> <!-- cd-cart-container -->


                <!-- Two -->
                <div id="two" class="spotlight">
                  <div class="container"> 
                   <!-- Title -->
                   <div class="row spacertitle">
                     <div class="col-lg-12">
                       <h3 class="text-center"><b>Recommended Items</b></h3>
                     </div>
                   </div>

                   
                    <div class="row text-center .spacer">
                        <div class="col-md-3 col-sm-6 hero-feature">
                            
                            <!--1st Thumbnail-->
                            <div class="thumbnail">
                               <img src="<?php echo base_url('asset/images/true.jpg')?>" alt="">
                               <div class="caption">
                                  <h3>Hair Extensions</h3>
                                  <p>Premium grade Brazilian hair, 100% human hair.</p>
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
                                  <button type="button" class="order-btn btn btn-md cd-add-to-cart" data-price="1000" data-product="Brazilian Weave" data-imgsource="true.jpg">ORDER</button>
                               </div><!--caption--> 
                           </div><!--thumpnail-->
                       </div><!--column-->
                       <div class="col-md-3 col-sm-6 hero-feature">
                            
                            <!--2nd Thumbnail-->
                            <div class="thumbnail">
                               <img src="<?php echo base_url('asset/images/ps4.jpg')?>" alt="">
                               <div class="caption">
                                  <h3>Playstation 4</h3>
                                  <p>Latest game console from Sony. It comes with a single controller.</p>
                                  <div class="text-left">
                                     <span class="text-left glyphicon glyphicon-globe"></span>Rbay,KZN
                                     <span class="glyphicon glyphicon-scale col-md-offset-3"></span>Goal : 100 
                                  </div><br/>

                                  <!--PROGRESS BAR MARKUP-->
                                  <div class="progress" style="height:7px;"> 
                                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span>
                                     </div><!-- ./progress-bar --> 
                                  </div><!-- ./progress -->

                                  <ul class="list-inline text-center list-unstyled">
                                      <li>14</li><span><b>Days left</b></span>
                                      <li>100%</li><span><b>Backed</b></span>
                                  </ul>
                                  <button type="button" class="order-btn btn btn-md cd-add-to-cart" data-price="2500" data-product="PS 4" data-imgsource="ps4.jpg">ORDER</button>
                               </div><!--caption--> 
                           </div><!--thumpnail-->
                       </div><!--column-->
                       
                       <div class="col-md-3 col-sm-6 hero-feature">
                            
                            <!--3rd Thumbnail-->
                            <div class="thumbnail">
                               <img src="<?php echo base_url('asset/images/pots.jpg')?>"  alt="">
                               <div class="caption">
                                  <h3>Stainless Steel pots</h3>
                                  <p>4-set pot collection from the renowned German brand Bernendes.</p>
                                  <div class="text-left">
                                     <span class="text-left glyphicon glyphicon-globe"></span>Dbn,KZN
                                     <span class="glyphicon glyphicon-scale col-md-offset-4"></span>Goal : 12 
                                  </div><br/>
                                  <!--PROGRESS BAR MARKUP-->
                                  <div class="progress" style="height:7px;"> 
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"><span class="sr-only">89% Complete</span>
                                      </div><!-- ./progress-bar --> 
                                  </div><!-- ./progress -->
                                
                                   <ul class="list-inline text-center list-unstyled">
                                      <li>21</li><span><b>Days left</b></span>
                                      <li>89%</li><span><b>Backed</b></span>
                                    </ul>
                                    <button type="button" class="btn order-btn btn-md cd-add-to-cart" data-price="900" data-product="Stainless Steel pots" data-imgsource="pots.jpg">ORDER</button>
                                </div><!--caption--> 
                           </div><!--thumpnail-->
                       </div><!--column-->
                       <div class="col-md-3 col-sm-6 hero-feature">
                            
                            <!--4th Thumbnail-->
                            <div class="thumbnail">
                              <!---->
                               <img src="<?php echo base_url('asset/images/external.jpg')?>" alt="">
                               <div class="caption">
                                  <h3>External Hard Drive</h3>
                                  <p>An 8 cm x12,6 cm 1TB Seagate hard drive.</p>
                                  
                                  <div class="text-left">
                                     <span class="text-left glyphicon glyphicon-globe"></span>Dbn,KZN
                                     <span class="glyphicon glyphicon-scale col-md-offset-4"></span>Goal : 10 
                                  </div><br/>
                                  <!--PROGRESS BAR MARKUP-->
                                  <div class="progress" style="height:7px;"> 
                                       <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span>
                                       </div><!-- ./progress-bar --> 
                                  </div><!-- ./progress -->  
                                    <ul class="list-inline text-center list-unstyled">
                                      <li>2</li><span><b>Days left</b></span>
                                      <li>60%</li><span><b>Backed</b></span>
                                    </ul>
                                  <button type="button" class="order-btn btn btn-md cd-add-to-cart" data-price="750" data-product="1TB Seagate hard drive" data-imgsource="external.jpg">ORDER</button> 
                               
                               </div><!-- ./caption --> 
                           </div><!-- ./thumpnail -->
                       </div><!-- ./column -->
                   </div><!-- ./row -->    
                    <a href="#parallax-img" class="goto-next scrolly"></a>
                 </div><!-- ./container -->  
                </div><!-- ./spotlight -->
              
    <!-- Image backgrounds with Parallax Image-->
     <div class="spotlight" id="parallax-img"> 
      <aside class="image-bg-fixed-height parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('asset/images/happy-ppl.jpg')?>">
        <h2 class="img-heading">..WE'LL MAKE U </h2>
      </aside>
      <a href="#wishlist" class="goto-next scrolly"></a>
     </div> 
    
    
      <!-- Wishlist section-->
      <div id="wishlist" class="spotlight well">
        <div class="container learn">
          <div class="row">
            <div class="col-md-6">
              <div class="side-img row-demand">
                <div class="side-img-text">
                  <h2> Save more, create campaign of products to buy.</h2>
                  <p>Invite friends to backup your order. Get group buying discounts.</p>
                  <p>Start now !!!!</p><br/>
                  <a href="<?php echo base_url('index.php/demand');?>">
                    <button type="button" class="btn btn-lg order-btn">CREATE CAMPAIGN<span class="glyphicon glyphicon-chevron-right"></span></button>
                  </a>
                </div><!-- /.side-img-text -->  
              </div><!-- ./side-img -->
            </div> <!-- ../col-md-6-->
            <div class="col-md-6 right-side-text">
              <h1><i>" If your product campaign gets a minimum order number you'll get a further indivisual discount."</i></h1>
              <img class="img-responsive col-md-offset-4" src="<?php echo base_url('asset/images/like.png'); ?>">
            </div><!-- ./ right-side-text -->  
          </div><!-- ./row -->   
          <a href="#parallax-img-sell" class="goto-next scrolly">Next</a>
        </div> <!-- ./ container --> 
      </div><!-- ./wishlist section-->

     <!-- Image backgrounds with Parallax Image-->
     <div class="spotlight" id="parallax-img-sell"> 
      <aside class="image-bg-fixed-height parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('asset/images/smiley-adult.jpg')?>">
        <h2 class="img-heading">START SELLING TO OUR USERS NOW</h2>
      </aside>
      <a href="#supply-section" class="goto-next scrolly"></a>
     </div>  

     <!-- Supply Section-->
     <div class="spotlight" id= "supply-section">
      
      <!-- Page Content -->
      <div class="container">
       
        <div class="featurette-divider">
        
        <div class="featurette" id="about">
            <img class="featurette-image img-responsive pull-left" src="<?php echo base_url('asset/images/dropshipping.jpeg');?>">
            <h2 class="featurette-heading">Cut Costs
                <span class="text-muted">Serve Multitudes</span>
            </h2>
            <p class="lead">We combine small indivisual orders that might have gone elsewhere to a large group order and direct it to your business. This eliminates costs associated with brick and mortar storefronts. We inherit the headache inducing parts of your business wholesale.   </p>
            <h3 class="text-highlight">Increase Scale,Sell Wholesale, Aggregate Profits</h3>
            <a class="btn order-btn btn-lg" href="#">Start Selling <span class="glyphicon glyphicon-chevron-right"></span></a>
            <img class="img-responsive" src="<?php echo base_url('asset/images/store.png');?>">
            
        </div>
        </div>
        

        <a href ="#footer" class ="goto-next scrolly"></a>
      </div>
     </div>      


        

        

