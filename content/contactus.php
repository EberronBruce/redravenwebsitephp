<?php include("classes/SendEmail.php"); ?>


<section class="contactus">
    
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
            <input type="text" name="name" class="contact-input" placeholder="Your Name Here" value="<?php echo filter_input(INPUT_POST, 'name'); ?>" />
        </div>
        
        <div class="form-group">
            <label for="email" class="label">Your Email:</label>
            <input type="email" name="email" class="contact-input" placeholder="Your Email Here" value="<?php echo filter_input(INPUT_POST, 'email'); ?>" />
        </div>
        
        <div class="form-group">
            <label for="message" class="label">Your Message:</label>
            <textarea name="message" class="contact-input contact-message" placeholder="Your Message Here"><?php echo filter_input(INPUT_POST, 'message'); ?></textarea>
        </div>
           
            
            <div class="messagebtn">
                <img class="contact-raven" src="image/navleftraven.png" alt="Left Red Raven" />
                <input type="submit" name="submit" class="btn" value="Send Message"/>
                <img class="contact-raven" src="image/navrightraven.png" alt="Left Red Raven" />
            </div>
           
        
    </form>
    
    <article>
        <p>Truffaut mustache whatever, small batch proident readymade lo-fi 
            pickled. Biodiesel ut ugh try-hard non. Yr gluten-free wayfarers 
            taxidermy American Apparel laborum chillwave, hella slow-carb 
            Banksy kale chips tote bag vero. Roof party narwhal jean shorts, 
            plaid blog keytar cornhole Marfa heirloom VHS four loko normcore. 
            Cliche crucifix cray health goth farm-to-table consectetur. 
            Assumenda Brooklyn fixie meditation, pour-over farm-to-table 
            dreamcatcher deserunt Godard. Nesciunt pop-up consectetur eu velit 
            deep v, try-hard ut exercitation four loko cold-pressed Tumblr.</p>
        
    </article>
    
    <div class="clear"></div>
    
    
</section>