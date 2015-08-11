var systemObject = {
    run : function() {
        this.content($('nav ul li a'));
        this.pop();
    },
    content : function(obj) {
        obj.on('click', function(e){
            var thisUrl = $(this).attr('href');
            var thisTitle = $(this).attr('title');
            systemObject.load(thisUrl);
            window.history.pushState(null, thisTitle, thisUrl);
            e.preventDefault();
        });
    },
    pop : function() {
        window.onpopstate = function() {
            systemObject.load(location.pathname);
        };
    },
    load : function(url) {
        url = url === '/' ? '/home' : url;
        jQuery.getJSON(url, {ajax : 1}, function(data){
            jQuery.each(data, function(k, v) {
                $('#' + k + ' section').hide("drop",500, function() {
                    $(this).replaceWith($(v).hide().fadeIn(1500));
                });
            });
        });
    }
    
};

$(function() {
    systemObject.run();
});
        
        
        