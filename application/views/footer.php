        <!--Footer-->
        <div id="footer" class="spotlight container-footer-background"> 
         <footer class="container">
            <div class="backBox row">
          
               <h4 class="align"><u>We are social<u></h4>
               <ul class="list-inline col-md-8 col-md-offset-4">
                 <li><a href="#"><img src="<?php echo base_url('asset/images/instagram2.png');?>"></a></li>
                 <li><a href="#"><img src="<?php echo base_url('asset/images/youtube2.png');?>"></a></li>
                 <li><a href="#"><img src="<?php echo base_url('asset/images/google2.png');?>"></a></li>
                 <li><a href="#"><img src="<?php echo base_url('asset/images/twitter3.png');?>"></a></li>
                 <li><a href="#"><img src="<?php echo base_url('asset/images/facebook2.png');?>"></a></li>
                 <li><a href="#"><img src="<?php echo base_url('asset/images/pinterest2.png');?>"></a></li>
               </ul>
               
               <!-- Contact Form -->
               <form class="form-horizontal" role="form" data-toggle="validator">
                    
                    <!-- Name input-->
                    <div class="form-group">  
                         <div class="col-md-6 col-md-offset-3">
                            <input id="msg-name" name="msg-name" type="text" placeholder="Name" class="form-control input-md" required>
                            <div class="help-block with-errors"></div>
                          </div>
                      
                     </div>

                     <!-- Email input-->
                     <div class="form-group">  
                         <div class="col-md-6 col-md-offset-3">
                            <input id="msg-email" name="msg-email" type="email" placeholder="Email" class="form-control input-md" data-error="Eish, that email address is invalid" required>
                            <div class="help-block with-errors"></div>
                         </div>
                     </div>

                     <!--Messsage-->
                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-3">
                            <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                         </div>
                     </div>
                     
                     <!--Submit button-->
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button type="submit" class="btn order-btn btn-md btn-block" id="msgSubmit" name="msgSubmit">Submit</button>
                        </div>
                     </div>
              
               </div><!-- ./form-->    
    
               <a href="#" class="goto-next scrolly">Next</a>
               <a href="#0" class="cd-top">Top</a>
            </div> 
         </footer>  
        </div> 



    <?php
      if($page_title == 'Agreegate on Discounts'){
        $blog= '';
        $animated = '';
      }
    ?>


    <!-- jQuery -->
    <script src="<?php echo base_url($jquery);?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url($bootstrap);?>"></script>
     
    <!--Bootstrap form validator plugin-->
    <script src="<?php echo base_url($validator);?>"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <!-- Scrolly js libraries -->
    <script src="<?php echo base_url($scrolly);?>"></script> 
    <script src="<?php echo base_url($skel);?>"></script>
    <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
    
    <!--Main Custom Core js -->
    <script src="<?php echo base_url($main);?>"></script>

    <script>
         
    


    </script>

    <!--Interactive cart js-->
    <script src="<?php echo base_url($cart);?>"></script>
    
    <!--Parallax Image js-->
    <script src="<?php echo base_url($parallax);?>"></script>

    <!--Sign(in/up) Modal js-->
    <script src="<?php echo base_url($modal);?>"></script>

    <!--Smart Fixed Nav js-->
    <script src="<?php echo base_url($smart_nav_js);?>"></script>

    <!-- Back to top js-->
    <script src="<?php echo base_url('asset/js/backToTop.js'); ?>"></script>

    <script src="<?php echo base_url($blog);?>"></script>
    
    <script src="<?php echo base_url($animated);?>"></script>

    
    
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5819a1d5a1a314d1">
    </script> 
    <script type="text/javascript">

      $('#demandSubmit').click(function(){

       event.preventDefault();

          //checks if browser supports FormData API
            if (typeof FormData !== 'undefined') {
               
               var name = $('#itemName').val();
               var description = $('#itemDescription').val();
               var size = $('#itemSize').val();
               var duration = $('#duration').val();
               var location = $('#userLocation').val();


               // send the formData
               var formData = new FormData( $("#demandForm")[0] );
              
               formData['itemName'] = name;
               formData['itemDescription'] = description;
               formData['itemSize'] = size;
               formData['duration'] = duration;
               formData['userLocation'] = location;
              

             $.ajax({
                 url : "<?php echo base_url('index.php/upload'); ?>", 
                 type : 'POST',
                 data : formData,
                 async : false,
                 cache : false,
                 contentType : false,
                 processData : false,
                 success : function(data,msg) {
                  
                

                  if(msg == 'success'){
                      $('#statusMsg').html('<div class="alert alert-success text-center">Order placement was Successful.Continue to Location...</div>');
                   }else{
                      $('#statusMsg').html('<div class="alert alert-danger text-center">'+data+'</div>');
                   }    
                }

              });
            return false;
           } else {
       message("Your Browser Don't support FormData API! Use IE 10 or Above!");
    }   

  });
  

  $('#paymentSubmit').click(function(){
               

              // send the formData
               var formData = {
              
                    customerName : $('#customerName').val(),
                    customerPhone : $('#customerPhone').val(),
                    customerAddress : $('#customerAddress').val()
    
              };

              

             $.ajax({
                 url : "<?php echo base_url('index.php/upload/billing_details'); ?>", 
                 type : 'POST',
                 data : formData,
                 success : function(msg) {
                    
                   if(msg=='Successful'){
                      $('#statusMsg').html('<div class="alert alert-success text-center">Your billing info will be added</div>');
                   }else{
                      $('#statusMsg').html('<div class="alert alert-danger text-center">'+msg+'</div>');
                   }   
                }

              });
            return false;
        });


  $('#locationSubmit').click(function(){
     var form_data = {
        location: $('#location').val()
      };
         
      

              $.ajax({
                 url : "<?php echo base_url('index.php/LandingController/location_upload'); ?>", 
                 type : 'POST',
                 data : form_data,
                 success : function(msg) {
                  if(msg == 'YES'){
                      $('#statusMsg').html('<div class="alert alert-success text-center">Your Collection Location was updated successfully.Continue to payments</div>');
                 }else{
                      $('#statusMsg').html('<div class="alert alert-danger text-center">'+msg+'</div>');
                   }   
                }

              });
            return false;
      

  });      

        

   $("#itemImg").on('change', function () {
 
        if (typeof (FileReader) != "undefined") {
 
            var image_holder = $("#image-holder");
            image_holder.empty();
 
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img  />", {
                    "src": e.target.result,
                    "class": "thumb-image,img-responsive"
                }).appendTo(image_holder);
 
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });

        
     
      
      $('#submit-signup').click(function() {
       var form_data = {
        signup_username: $('#signup-username').val(),
        signup_email: $('#signup-email').val(),
        signup_password: $('#signup-password').val()
        };
       $.ajax({
        url: "<?php echo base_url('index.php/vanilla_authentication'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES'){
                $('#alert-signup-msg').html('<div class="alert alert-success text-center">YOUR ACCOUNT WAS CREATED SUCCESSFULLY.<br>You are now an AGREEGATER</div>');
                location.reload();
              }  
            else if (msg == 'NO')
                $('#alert-signup-msg').html('<div class="alert alert-danger text-center">Could not create your account.Try again later. </div>');
            else
                $('#alert-signup-msg').html('<div class="alert alert-danger">' + msg + '</div>');
             }
          });
        return false;
     });

     $('#submit-signin').click(function() {
       var form_data = {
        signin_email: $('#signin-email').val(),
        signin_password: $('#signin-password').val()
        };
       $.ajax({
        url: "<?php echo base_url('index.php/vanilla_authentication/login'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
              location.reload();
          
            else if (msg == 'NO')
                $('#alert-signin-msg').html('<div class="alert alert-danger text-center">Wrong email or password.</div>');
            else
                $('#alert-signin-msg').html('<div class="alert alert-danger">' + msg + '</div>');
             }
          });
        return false;
     }); 

     $('#submit-reset').click(function() {
       var form_data = {
        reset_email: $('#reset-email').val()
        };
       $.ajax({
        url: "<?php echo base_url('index.php/vanilla_authentication/reset_password'); ?>",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
                $('#alert-reset-msg').html('<div class="alert alert-success text-center"></div>');
            else if (msg == 'NO')
                $('#alert-reset-msg').html('<div class="alert alert-danger text-center"></div>');
            else
                $('#alert-reset-msg').html('<div class="alert alert-danger">' + msg + '</div>');
             }
          });
        return false;
     });

          var cartWrapper = $('.cd-cart-container');
          var cartBody = cartWrapper.find('.body');
          var cartList = cartBody.find('ul').eq(0);
          var cartTrigger = cartWrapper.children('.cd-cart-trigger');
          var cartTotal = cartWrapper.find('.checkout').find('span');
          var cartCount = cartTrigger.children('.count');

       /* cartList.on('click', '.delete-item', function(event){
            
            var product = $(event.target).parents('.product');
            var productQuantity = Number(product.find('.quantity').find('select').val());
            var productTotPrice = Number(product.find('.price').text().replace('R', '')) * productQuantity;

            var imageSource = product.find('.product-image img').attr('src');

            var total = (Number(cartTotal.text()) - productTotPrice).toFixed(2);

            var count = Number(cartCount.find('li').eq(0).text()) - 1;
            var productName = product.find('.name').text();
            var price = Number(product.find('.price').text());
             
            alert(productName);            

            var form_data = {
             count: count,
             total: total ,
             imageSource: imageSource,
             productName: productName,
             price: price
           };

           $.ajax({
            url: "<?php echo base_url('index.php/LandingController/deleteCartItem'); ?>",
            type: 'POST',
            data: form_data,
            success: function(msg) {
              alert(msg);
            }
           });
           return false;


      
          });*/

         //important updating cart total and cart count
         $('.cd-add-to-cart').click(function() {
           
           var cartTotal = cartWrapper.find('.checkout').find('span');
           var cartTrigger = cartWrapper.children('.cd-cart-trigger');
           var cartCount = cartTrigger.children('.count');

           var count = Number(cartCount.find('li').eq(0).text()) + 1;
           var price = $(this).data('price');
           var id = $(this).data('productid');

           

           //product details
           var productName = $(this).data('product');
           var imageSource = $(this).data('imgsource');
           

           var total = (Number(cartTotal.text()) + price).toFixed(2);

           
            

           var form_data = {
             count: count,
             total: total ,
             imageSource: imageSource,
             productName: productName,
             price: price,
             id:id
           };
           $.ajax({
            url: "<?php echo base_url('index.php/LandingController/updateCart'); ?>",
            type: 'POST',
            data: form_data,
            success: function(msg) {
            
            }
           });
           return false;
          });

        //update delete

    

    

     
</script>
<script>
    //init fb setup
      window.fbAsyncInit = function() {
                FB.init({
                appId: '509089349297322',
                status: true,
                cookie: true,
                xfbml: true
            });
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });

        };

        // Load the SDK asynchronously
        (function(d){
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
        }(document));

        function statusChangeCallback(response) {
           if (response.status === 'connected') {
                // Logged into your app and Facebook.
                _i();
          } else if (response.status === 'not_authorized') {
               // The person is logged into Facebook, but not your app.
               document.getElementById('status-msg-signin').innerHTML = 'Please log ' +
              'into this app.';
         }
        }

        function _login() {
          FB.login(function(response) {
           // handle the response
           if(response.status==='connected') {
             _i();
            }
           }, {scope: 'public_profile,email'});

        } 

        function _i(){
           FB.api('/me', function(response) {
             alert(response.first_name);
             
           });
 } 

/*
    window.fbloaded = function(){
        alert('loads')
    FB.Event.subscribe('auth.statusChange',function(response){
      if(response.status == 'connected'){
          var msg1 ="Login Successful";
          $("#status-msg-signin").html(msg1);
          $("#status-msg-signup").html(msg1);
             FB.api("/me",function(response){
               $("#welcome-msg").html("Welcome ! "+ response.name + "~");
            });
      }else{
         var msg2 = "Logout Successful";
         $("#status-msg-signin").html(msg2);
         $("#status-msg-signup").html(msg2);
      }
    });
}


var loginCheck = function(){

    FB.getLoginStatus(function(response)){
      if(response.status === 'connected'){
          FB.logout(function(response){
              $("#my-button-signin").html("Facebook Login");
              $("#my-button-signup").html("Facebook Login");
          });
      }
      else{
          FB.login(function(response){
             
             $("#my-button-signin").html("Facebook Logout");
             $("#my-button-signup").html("Facebook Logout");
          },{scope:'public_profile,email'});
      }
    });
}

$("#my-button-signin").click(function(){
    loginCheck();
});
$("#my-button-signup").click(function(){
    loginCheck();
});*/
</script>