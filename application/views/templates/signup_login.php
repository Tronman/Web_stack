<!--Modal Mesh-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
              	<div class="modal-body">
    
                  <!-- Cd Mesh-->
              	  <ul class="cd-switcher">
                      <li><a href="#0">Sign in</a></li>
				      <li><a href="#0">New account</a></li>
			      </ul>

			      <div id="cd-login"> <!-- log in form -->
				    <form class="cd-form" >
				      <div id="alert-signin-msg" class="text-center"></div> 
				      <h3 id="status-msg-signin" class="text-center"></h3>	
					  <p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" name="signin-email" value="<?php echo set_value('signin-email'); ?>" placeholder="E-mail" required>
					  </p>

					  <p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" name="signin-password" value ="<?php set_value('signin-password'); ?>" type="text"  placeholder="Password" required>
						<a href="#0" class="hide-password">Hide</a>
					  </p>

					  <p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					  </p>

					  <p class="fieldset">
						<input class="full-width" type="submit" value="Login" id="submit-signin">
					  </p>
                     
					  
					  </form>
                       <div class="cd-form"> 
					    <p class="fieldset">
                          <button id="my-button-signin" class="btn btn-primary btn-lg center-block btn-block" src="" alt="">Facebook Login</button>
					   </p>
				      </div>
				   <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				   <!-- <a href="#0" class="cd-close-form">Close</a> -->
			      </div> <!-- cd-login -->



                  <div id="cd-signup"> <!-- sign up form -->
				   
				   <form class="cd-form">
					<div id="alert-signup-msg" class="text-center"></div>
					<h3 id="status-msg-signup" class="text-center"></h3>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" name="signup-username" type="text" placeholder="Username" value="<?php echo set_value('signup-username');?>" required>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" name="signup-email" type="email" placeholder="E-mail" value="<?php echo set_value('signup-email');?>" required>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" name="signup-email" type="text"  placeholder="Password" value="<?php echo set_value('signup-password');?>" required>
						<a href="#0" class="hide-password">Hide</a>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>
                    
					<p class="fieldset">
						<input class="full-width has-padding" type="submit" id="submit-signup" value="Signup">
					</p>
					 
				   </form>
                   <form class="cd-form">  
				      <p class="fieldset">
                          <button class="btn btn-primary btn-lg center-block btn-block" id="my-button-signup" onclick="_login();" type="submit" >Facebook Login</button>
					  </p>
                   </form>   
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			  </div> <!-- cd-signup -->



               <div id="cd-reset-password"> <!-- reset password form -->
				  <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				  <form class="cd-form">
				  	<div id="alert-reset-msg" class="text-center"></div>
				    	<p class="fieldset">
					    	<label class="image-replace cd-email" for="reset-email">E-mail</label>
						    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="reset-email" value="<?php echo set_value('reset-email'); ?>" required>
					   </p>

					   <p class="fieldset">
						   <input class="full-width has-padding" type="submit" value="Reset password" id="submit-reset">
					   </p>
				  </form>

				  <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			  </div> <!-- cd-reset-password -->
			  <a href="#0" class="cd-close-form">Close</a>

                 
                    <div class="modal-footer">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div><!--./modal-footer -->

              	</div><!-- ./modal-body-->
              </div><!-- ./modal-content-->
         </div><!-- ./modal-dialog-->
</div><!-- ./modal outer div-->
