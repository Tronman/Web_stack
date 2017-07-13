<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
      
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('asset/images/peeps.jpg');"></div>
                <div class="carousel-caption text-muted" >
                    <h2>COMBINE BUYING POWER</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill img-responsive" style="background-image:url('asset/images/storefront.jpg');"></div>
                <div class="carousel-caption">
                    <h2>GET DEEP DISCOUNTS</h2>
                </div>
            </div>
            
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('asset/images/ecommerce.jpg');"></div>
                <div class="carousel-caption">
                    <h2>PAY A FRACTION</h2>
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        
    </header>
    <a href="#one" class="goto-next scrolly">Next</a> 