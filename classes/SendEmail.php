<?php
      if (filter_input(INPUT_POST, 'submit')) {
          
          if(!$_POST['name']) {
              $error="<br />Please Enter a Name";
          }
          if (!$_POST['email']) { 
              $error.="<br />Please Enter an Email";}
	  else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
              $error.="<br />Please Enter a Valid Email"; 
          }
          if (!$_POST['message']) {

            $error.="<br />Please Enter a Message";

	 }
         
         if(!$error) {
             if (mail("bruce@redravencomputing.com", "Message from website!", 
                     
                "Name: ".$_POST['name']."

                Email: ".$_POST['email']."

                Message: ".$_POST['message'])) {
                 
                header("Location: /messagesent");
                die();
                 
             }else {
                 echo "Sorry, there was an error sending your message. Please try again later.";
             }
             
         } else {
             echo "There were errors in the form that passed check";
         }
          
         
          
      }

?>
