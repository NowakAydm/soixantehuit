
var doc = $(document);
var body = $('html, body');
var prevScroll = 0;

doc.ready(function () {

//----------- Edito scroll --------------
    body.stop().animate({scrollTop: 0}, 10); 

    prevScroll = 0;
    
    setTimeout(function() {
        doc.on('scroll', function () {
            if (prevScroll < 10 && doc.scrollTop() > prevScroll)
                body.stop().animate({scrollTop: $('#carte').position().top}, 1000); 

            prevScroll = doc.scrollTop();
        });
    }, 100);
    
    $('.scroll').click(function() {
        body.stop().animate({scrollTop: $('#carte').position().top}, 1000);
    });

//----------- 68 --------------

    $('#but').click(function() {
       $('.info-container').addClass('info-transition');
       $('.info-container').addClass('info-open');
       $('.info-open button').attr('tabindex', '0');
       $('#carte button').attr('tabindex', '-1');
    });
    $('.close-info').click(function() {
       $('.info-open button').attr('tabindex', '-1');
       $('#carte button').attr('tabindex', '0');
       $('.info-container').addClass('info-transition');
       $('.info-container').removeClass('info-open');
    });
    
   $('.info-container').on('transitionend', function() {
       $(this).removeClass('info-transition');
   });
    
//----------- Agenda --------------
$('#timeline').stop().animate({scrollTop: -99999999}, 1000); 
    
    var prevPos = 0;
    $('.evenement').click(function() {
        var id = $(this).attr('id');
        var pos = $('#' + id).offset().top - $('#timeline').offset().top + 2;

        $('#timeline').stop().animate({scrollTop: pos + prevPos}, 1000);
        prevPos += pos;
        console.log(pos + ' -- ' + prevPos);
    });
    $('#timeline').on('scroll', function()  {
        prevPos = $('#timeline').scrollTop();
    });

    $('.agenda-header span').click(function() {
        $(this).find('.glyphicon')
    });
});
