
var doc = $(document);
var body = $('html, body');
var prevScroll = 0;

function isScrolledIntoView(elem)
{
    var docViewBottom = $(window).scrollTop() + $(window).height();
    var elemTop = $(elem).offset().top + $(elem).height();

    return (elemTop >= docViewBottom - 300);
}

doc.ready(function () {
//----------- Header scroll --------------
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
        $('#header-accueil').click(function() {
            document.activeElement.blur();
            window.scrollTo(0, 0);
        });
        $('#header-68').click(function() {
            document.activeElement.blur();
            window.scrollTo(0, $('#68').position().top);
        });
        $('#header-agenda').click(function() {
            if (doc.scrollTop() < 10) {
                prevScroll = 100;
                window.scrollTo(0, 100);
                prevScroll = 100;
            };
            window.scrollTo(0, $('#agenda').position().top);
            document.activeElement.blur();
        }); 
    }
    else {
        $('#header-accueil').click(function() {
            document.activeElement.blur();
            body.stop().animate({scrollTop: 0}, 1000);
        });
        $('#header-68').click(function() {
            document.activeElement.blur();
            body.stop().animate({scrollTop: $('#68').position().top}, 1000);
        });
        $('#header-agenda').click(function() {
            if (doc.scrollTop() < 10) {
                prevScroll = 100;
                body.stop().animate({scrollTop: 100}, 0);
                $('#header-agenda').click();
            };
            body.stop().animate({scrollTop: $('#agenda').position().top}, 1000);
            document.activeElement.blur();
        });        
    };
    
//----------- Edito scroll --------------
    body.stop().animate({scrollTop: 0}, 10); 

    prevScroll = 0;
    
    setTimeout(function() {
        
        doc.on('scroll', function () {
            if (prevScroll < 10 && doc.scrollTop() > prevScroll)
                body.stop().animate({scrollTop: $('#68').position().top}, 1000); 

            prevScroll = doc.scrollTop();
            
            if (isScrolledIntoView($('#home'))) {
                $('#header-accueil > .header-background').removeClass('hidden');
                $('#header-68 > .header-background').addClass('hidden');
                $('#header-agenda > .header-background').addClass('hidden');
            }
            else if (isScrolledIntoView($('#68'))) {
                $('#header-accueil > .header-background').addClass('hidden');
                $('#header-68 > .header-background').removeClass('hidden');
                $('#header-agenda > .header-background').addClass('hidden');
            }
            else if (isScrolledIntoView($('#agenda'))) {
                $('#header-accueil > .header-background').addClass('hidden');
                $('#header-68 > .header-background').addClass('hidden');
                $('#header-agenda > .header-background').removeClass('hidden');
            };
            
            $('.header-background').parent().css('border-bottom', 'none');
            $('.header-background.hidden').parent().css('border-bottom', 'dotted 1px black');
            
            
            if (prevScroll < $('#68').position().top) {
                $('.carte').css('transform', '-webkit-translateY('+prevScroll+'px)');
                $('.carte').css('transform', '-moz-translateY('+prevScroll+'px)');
                $('.carte').css('transform', '-ms-translateY('+prevScroll+'px)');
                $('.carte').css('transform', 'translateY('+prevScroll+'px)');
                $('.carte svg').css('opacity', '1');
            }
            else {
                $('.carte').css('transform', '-webkit-translateY('+$('#68').position().top+'px)');
                $('.carte').css('transform', '-moz-translateY('+$('#68').position().top+'px)');
                $('.carte').css('transform', '-ms-translateY('+$('#68').position().top+'px)');
                $('.carte').css('transform', 'translateY('+$('#68').position().top+'px)');
//                $('.carte svg').css('opacity', '0');
            };
        });
    }, 100);
    
    $('.scroll').click(function() {
        body.stop().animate({scrollTop: $('#68').position().top}, 1000);
    });

//----------- 68 --------------

    $('#but').click(function() {
       $('.info-container').addClass('info-transition');
       $('.info-container').addClass('info-open');
       $('.info-open button').attr('tabindex', '0');
       $('#68 button').attr('tabindex', '-1');
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
    searchReady();
    
    $('#timeline').stop().animate({scrollTop: -99999999}, 1000); 
    
    var prevPos = 0;
    $('.evenement').click(function() {
        var id = $(this).attr('id');
        var pos = $('#' + id).offset().top - $('#timeline').offset().top + 2;

        $('#timeline').stop().animate({scrollTop: pos + prevPos}, 1000);
        prevPos += pos;
    });
    $('#timeline').on('scroll', function()  {
        prevPos = $('#timeline').scrollTop();
    });

    $('.agenda-header span').click(function() {
        $(this).find('.glyphicon')
    });
});
