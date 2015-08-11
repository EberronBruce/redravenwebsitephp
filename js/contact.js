$("#msgbtn").click(function(e){
    
    var errors = "";
    
    var nametest = $("#name").val();
    
    if(nametest === "") {
        //e.preventDefault();
        errors += "<p>Please Enter a Name</p>";
        
    }
    
    var emailtest = IsEmail($("#email").val());
    
    if(!emailtest) {
        errors += "<p>Please check your Email Address </p> ";
        //e.preventDefault();
        //$('.err').css('display','block');
        //$('.err').append("<p>There is a mistake with the email.</p>");
    }
    
    var messtest = $("#msg").val();
    
    if(messtest === "") {
        errors += "<p>Please leave a Message</p>"
        
    }
    
    if(errors === "") {
        //alert("everything checks");
    } else {
        e.preventDefault();
        $('.err').css('display','block');
        $('.err').html(errors);
    }
    
});

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


