
var doc = $(document);
var body = $("html, body");

var prevScroll = 1;

doc.ready(function () {

    doc.scrollTop(0);
    
    doc.on('scroll', function () {
        if (prevScroll == 0)
            body.stop().animate({scrollTop: $('#carte').position().top}, 1000); 
        else if (doc.scrollTop() < 100)   
            $('.scroll').css('opacity', '1');
        else if (doc.scrollTop() > 300)   
            $('.scroll').css('opacity', '0');
        
        prevScroll = doc.scrollTop();
    });


});
