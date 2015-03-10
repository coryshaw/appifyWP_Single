<div class="contact">
          	<div class="submitError" style="display: none ;">There was an error submitting the form</div>
          	<form action="#" method="post" id="contactForm" accept-charset="utf-8">
          	  <input type="hidden" name="tizoo" value="<?php echo get_bloginfo( 'admin_email' ); ?>"/>
          	  <input type="hidden" name="subject" value="<?php if ($apfy_app_name) { echo $apfy_app_name; } else { bloginfo('name'); } ?> Contact Form"/>
          	  <input type="hidden" name="submitpath" class="submitpath" value="<?php echo get_bloginfo('template_directory') ?>"/>
          	  <label for="name">Name:</label>
          	  <label class="error" for="name" id="name_error">This field is required.</label>
          	  <input type="text" name="name" class="required" value="" id="name"/>
          	  
          	  <label for="email">Email:</label>
          	  <label class="error" for="email" id="email_error">Must be a valid email address.</label>
          	  <input type="text" name="email" class="required email" value="" id="email"/>
          	  
          	  <label for="message">Message:</label>
          	  <label class="error" for="message" id="message_error">This field is required.</label>
          	  <textarea cols="40" rows="5" class="required" name="message" id="message"></textarea>	  
          
          	<a class="fancy_button contact-submit" href="#" onclick="return false;">
          	  <span style="background-color: #555;">Submit</span>
          	  
          	</a>
          	<div class="onesec"></div>
          
          	</form>
          </div><!-- end contact -->
