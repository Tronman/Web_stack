<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container text-center site-heading">
   <h1><u>Create Demand</u></h1>
</div>
<div class="change-background">
<div class="container">
	<div class="row">
       
    	     <form class="form-padding form-border col-md-6 form-horizontal" accept-charset="utf-8" action="<?php echo base_url('index.php/upload'); ?>" name="demandForm" id="demandForm" type="post" enctype="multipart/form-data">
    	     	<h2 class="text-center">Order Form</h2>
               <div class="col-md-12" id="statusMsg"></div>
               <div class="form-group">
               
                  <label for="item_img" class="col-md-3 control-label">Item image : </label>
                  <div class="col-md-9">
                      <input type="file" class="form-control" name="itemImg" id="itemImg" >
                  </div><br/><br/>
                  <div class="col-md-10 col-md-offset-2 img-responsive" id="image-holder"></div>
               </div>
               
               <div class="form-group">
                  <label for="itemName" class="col-md-3 control-label">Item Name : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="itemName" name="itemName" value="<?php echo set_value('itemName'); ?>" placeholder="">
                  </div>
               </div>
               
               <div class="form-group">
                  <label for="itemDescription" class="col-md-3 control-label">Item Description : </label>
                  <div class="col-md-9">
                      <textarea type="text" class="form-control" id="itemDescription" name="itemDescription" rows="4" value="<?php echo set_value('itemDescription'); ?>" placeholder="">

                      </textarea>  
                  </div>
               </div>
               
               <div class="form-group">
                  <label for="itemSize" class="col-md-3 control-label">Attribute(s) : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="itemSize" name="itemSize"value="<?php echo set_value('itemNameSize'); ?>" placeholder="i.e. colour, weight or size (if applicable)">
                  </div>
               </div>
               
               
               
               <div class="form-group">
                  <label for="userLocation" class="col-md-3 control-label">Your Location : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="userLocation" name="userLocation" value="<?php echo set_value('userLocation'); ?>" placeholder="KZN,Esikhawini">
                  </div>
               </div>
               
               <div class="form-group">
                  <label for="duration" class="col-md-3 control-label">Campaign Duration  </label>
                  <div class="col-md-9">
                      <select class="form-control" id="duration" name="duration">
                         <option>Select number of days</option>
                         <option value="+10 days">10 days</option>
                         <option value="+15 days">15 days</option>
                         <option value="+30 days">30 days</option>
                      </select>
                  </div>
               </div>
               
            <!-- <div class="form-group">
                  <label for="product_name" class="col-md-3 control-label">Item Name : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="product_name" placeholder="i.e.">
                  </div>
               </div>

               <div class="form-group">
                  <label for="product_name" class="col-md-3 control-label">Item Name : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="product_name" placeholder="i.e.">
                  </div>
               </div>

               <div class="form-group">
                  <label for="product_name" class="col-md-3 control-label">Item Name : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="product_name" placeholder="i.e.">
                  </div>
               </div>

               <div class="form-group">
                  <label for="product_name" class="col-md-3 control-label">Item Name : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="product_name" placeholder="i.e.">
                  </div>
               </div>

               <div class="form-group">
                  <label for="product_name" class="col-md-3 control-label">Item Name : </label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" id="product_name" placeholder="i.e.">
                  </div>
               </div>-->

               <button type="submit" class="btn order-btn btn-lg btn-center btn-block" id="demandSubmit">Place Order</button><br/>
                       
    	     </form>
             
    	      <div class="side-image-padding">
                     <img class="col-md-1 img-responsive" src="<?php echo base_url('asset/images/price-tag.png'); ?>">
                     <h4 class="col-md-5">Order items people in your neighbourhood are likely to buy. </h4>
    	        </div>
  
    	        <div class="side-text-image">
                     <img class="col-md-1 img-responsive" src="<?php echo base_url('asset/images/like-1.png'); ?>">
                     <span> <h4 class="col-md-5">Order items people in your neighbourhood are likely to buy. </h4></span>
    	        </div>

    	        <div class="side-text-image">
                     <img class="col-md-1 img-responsive" src="<?php echo base_url('asset/images/hourglass-2.png'); ?>">
                     <span> <h4 class="col-md-5">Order items people in your neighbourhood are likely to buy. </h4></span>
    	        </div>

    	        <div class="side-text-image">
                     <img class="col-md-1 img-responsive" src="<?php echo base_url('asset/images/lock-1.png'); ?>">
                     <span> <h4 class="col-md-5">Order items people in your neighbourhood are likely to buy. </h4></span>
    	        </div>

    	        <div class="side-text-image">
                     <img class="col-md-1 img-responsive" src="<?php echo base_url('asset/images/trophy.png'); ?>">
                     <span> <h4 class="col-md-5">Order items people in your neighbourhood are likely to buy. </h4></span>
    	        </div>
    	     
     </div><!-- ./row -->	     
       		
</div><!-- ./container -->
</div><!-- ./change-background -->