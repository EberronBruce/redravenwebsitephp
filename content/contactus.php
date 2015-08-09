<?php include("classes/SendEmail.php"); ?>


<section class="contactus" <?php if($error) {echo 'style="display:none;"';}?>>
    
    <h1> Contact Us </h1>
    <p>If you have any questions and you just want to chat about something then this is the place to reach us. 
    You can either fill out the form or use the information on this page to send us a message. We will love to hear
    from you and will get back to you as soon as we can.</p>
    			 	
    
    
    <br />
    <br />
    <hr>
    
    <form method="POST" class="contact-form">
        
        <div class="form-group">
            <label for="name" class="label">Your Name:</label>
            <input type="text" name="name" id="name" class="contact-input" placeholder="Your Name Here" value="<?php echo filter_input(INPUT_POST, 'name'); ?>" />
        </div>
        
        <div class="form-group">
            <label for="email" class="label">Your Email:</label>
            <input type="email" name="email" id="email" class="contact-input" placeholder="Your Email Here" value="<?php echo filter_input(INPUT_POST, 'email'); ?>" />
        </div>
        
        <div class="form-group">
            <label for="message" class="label">Your Message:</label>
            <textarea name="message" id="msg" class="contact-input contact-message" placeholder="Your Message Here"><?php echo filter_input(INPUT_POST, 'message'); ?></textarea>
        </div>
           
            
            <div class="messagebtn">
                <img class="contact-raven" src="image/navleftraven.png" alt="Left Red Raven" />
                <input type="submit" name="submit" id="msgbtn" class="btn" value="Send Message"/>
                <img class="contact-raven" src="image/navrightraven.png" alt="Left Red Raven" />
            </div>
           
        <div class="clear"></div>
        
        
    </form>
    
    <article>
        <br />
        <p>Mailing Address:</p>
        <p>Red Raven Computing Studios<br />
            1234 Fake Street<br />
            New York City, NY 92314
        </p>
        <br />
        <p>Email:</p>
        <p><a href="mailto:public@redravencomputing.com?subject=Contact">public@redravencomputing.com</a></p>
        <br />
        <p>Visit us:</p>
        <p>
            <a href="">Twitter</a> <br />
            <a href="">Facebook</a><br />
            <a href="">LinkedIn</a><br />
        </p>
   
        
    </article>
    
    <div class="err">
       
    </div>
    
    <div class="clear"></div>
 
</section>
<script src="/js/contact.js"></script>
