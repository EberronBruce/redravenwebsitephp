


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
