
var doc = $(document);
var body = $('html, body');
var prevScroll = 0;

doc.ready(function () {

    body.stop().animate({scrollTop: 0}, 10); 

    prevScroll = 0;
    
    setTimeout(function() {
        doc.on('scroll', function () {
            if (prevScroll < 10 && doc.scrollTop() > prevScroll)
                body.stop().animate({scrollTop: $('#carte').position().top}, 1000); 
            else if (doc.scrollTop() < 100)   
                $('.scroll').css('opacity', '1');
            else if (doc.scrollTop() > 300)   
                $('.scroll').css('opacity', '0');

            prevScroll = doc.scrollTop();
        });        
    }, 100);


    $('#but').click(function() {
       $('.info-container').addClass('info-transition');
       $('.info-container').addClass('info-open');
    });
    $('.close-info').click(function() {
       $('.info-container').addClass('info-transition');
       $('.info-container').removeClass('info-open');
    });
    
   $('.info-container').on('transitionend', function() {
       $(this).removeClass('info-transition');
   });

    console.log(parseInt($('.edito').attr('start')) + 1);
});
