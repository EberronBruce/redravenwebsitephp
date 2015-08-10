$(function(){
    checkurl();
    $("a").click(function(){
        checkurl();
        return false;
   });
});
        
function checkurl() {
    $(".nav-item").css('text-decoration','none');
    var pathname = window.location.pathname; 
    if(pathname==='/') {
        $("#navhome").css('text-decoration','underline');
    } else if(pathname==='/projects'){
        $("#navproj").css('text-decoration','underline');
    } else if(pathname==='/aboutstudios'){
        $("#navstud").css('text-decoration','underline');
    } else if(pathname==='/contactus'){
        $("#navcontact").css('text-decoration','underline');
    } 
}


$(window).scroll(function () {
    if ($(window).scrollTop() > 215) {
         $('#topNav').css('position', 'fixed');
         $('#topNav').css('top', '0');
         $('#topNav').css('background-color','rgba(105,105,105,1)');

    }
    if ($(window).scrollTop() < 215) {
         $('#topNav').css('position', 'relative');
         $('#topNav').css('top', '-45px');
         $('#topNav').css('background-color','rgba(105,105,105,0.3)');

    }
});
