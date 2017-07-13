<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Navigation -->
    <nav class="navbar  navbar-fixed-top navbar-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="<?php echo base_url('asset/images/small-8.png');?>" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav nav navbar-right">
                    <li id="dffTab">
                        <a  href="#">BECOME A SELLER</a>
                    </li>
                      <?php if ($this->session->username) { ?>
                        <li><p class="navbar-text text-uppercase"><span class="glyphicon glyphicon-user"></span><strong><?php echo $this->session->username; ?></strong></li>
                        <li><a href="<?php echo base_url(); ?>index.php/vanilla_authentication/logout">Log Out</a></li>
                      <?php } else { ?>
                    <li>
                        <a data-toggle="modal" data-target="#modal" class="cd-signup" href="#">Sign Up</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#modal" class="cd-signin" href="#">Log In</a>
                    </li>
                    <?php } ?>
                </ul>
                <a href="#0" class="cd-top">Top</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    
</nav> 
  <nav class="navbar-fixed-top">
    <?php

       //$count = $this->session->count;
       
       if(!($this->session->count)){
          
          $this->session->set_userdata('count',0);
          $this->session->set_userdata('total',0);
          $empty = 'empty';

        /*foreach ($_SESSION as $key => $value) {
             unset($_SESSION[$key]);
        }*/

          
       }else{
        $empty ='';
       }
    ?>
    <!--Interactive Cart markup-->
    <div class="cd-cart-container <?php echo $empty; ?>">
       <a href="#" class="cd-cart-trigger">
            Cart
          <ul class="count"> <!-- cart items count -->
              <li>
                <?php echo $this->session->count;?>
               </li>
              <li>0</li>
          </ul> <!-- .count -->
       </a>

       <div class="cd-cart">
           <div class="wrapper">
              <header>
                  <h2>Cart</h2>
                  <span class="undo">Item removed. <a href="#">Undo</a></span>
              </header>
            
              <div class="body">
                
                  <ul>
                    <!-- products added to the cart will be inserted here using JavaScript -->
                    <?php if($this->session->products):
                        foreach ($this->session->products as $item):
                        
                    ?>

                       <li class="product">
                        <div class="product-image">
                          <a href="#0">
                            <img class="img-responsive" src="<?php echo base_url().$item['imageSource'];?>" alt="product image">
                          </a>
                        </div>
                        <div class="product-details">
                          <h3>
                            <a href="#0" class="name"><?php echo $item['name']; ?></a>
                          </h3>
                          <span class="price">
                            <?php echo $item['price']; ?>
                          </span>
                          <div class="actions">
                            <a href="#0" class="delete-item">
                              Delete
                            </a>
                            <div class="quantity">
                              <label for="cd-product-'+ productId +'">
                                Qty
                              </label>
                              <span class="select">
                                <select id="cd-product-'+ productId +'" name="quantity">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                </select>
                              </span>
                            </div>
                          </div>
                        </div>
                      </li>
                    <?php endforeach?>

                  <?php endif ?>               
                  
                  </ul>
                
              </div>

              <footer><!--Checkout btn to lead to billing info -->
                  <a href="<?php echo base_url('index.php/LandingController/order');?>" class="checkout btn"><em>Checkout - R<span><?php echo $this->session->total;?></span></em></a>
              </footer>
           </div><!-- ./wrapper -->
       </div> <!-- .cd-cart -->
   </div> <!-- cd-cart-container -->
</nav><!--./ navbar-fixed-->
