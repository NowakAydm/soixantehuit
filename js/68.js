
var doc = $(document);
var body = $('html, body');
var prevScroll = 0;

function isScrolledIntoView(elem)
{
    var docViewBottom = $(window).scrollTop() + $(window).height();
    var elemTop = $(elem).offset().top + $(elem).height();

    return (elemTop >= docViewBottom - 300);
};

var animated = 0;
function startAnimation() {
    $('#header-accueil').html(window.innerWidth);

    if (window.innerWidth < 850) {
        $('.module-nanterre, .module-amandiers, .module-beauxarts, .module-archi').css('-webkit-transform', 'translate(5%)');      
        $('.module-nanterre, .module-amandiers, .module-beauxarts, .module-archi').css('-moz-transform', 'translate(5%)');      
        $('.module-nanterre, .module-amandiers, .module-beauxarts, .module-archi').css('-ms-transform', 'translate(5%)');
        $('.module-nanterre, .module-amandiers, .module-beauxarts, .module-archi').css('transform', 'translate(5%)');
        $('.module-pompidou, .module-archives, .module-bnf, .module-cinematheque').css('-webkit-transform', 'translate(-5%, 30%)');      
        $('.module-pompidou, .module-archives, .module-bnf, .module-cinematheque').css('-moz-transform', 'translate(-5%, 30%)');      
        $('.module-pompidou, .module-archives, .module-bnf, .module-cinematheque').css('-ms-transform', 'translate(-5%, 30%)');
        $('.module-pompidou, .module-archives, .module-bnf, .module-cinematheque').css('transform', 'translate(-5%, 30%)');
    }
    else {
        $('.module').each(function(){
            var that = $(this);
            setTimeout(function(){
                that.css('-webkit-transform', 'translateY(150px)');
                that.css('-moz-transform', 'translateY(150px)');
                that.css('-ms-transform', 'translateY(150px)');
                that.css('transform', 'translateY(150px)');
            }, Math.floor(Math.random() * 1500) + 700);
        });
        setTimeout(function() {
            $('.carte svg').css('opacity', '0');
        }, 3000);        
    };

    animated = 1;
};

doc.ready(function () {
    window.scrollTo(0, 0);
    
//----------- Header scroll --------------
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
        $('#header-accueil').click(function() {
            document.activeElement.blur();
            window.scrollTo(0, 0);
        });
        $('#header-68').click(function() {
            document.activeElement.blur();
            window.scrollTo(0, $('#68').position().top);
            $('.close-info').click();
        });
        $('#header-agenda').click(function() {
            if (doc.scrollTop() < 10) {
                prevScroll = 100;
                window.scrollTo(0, 100);
                prevScroll = 100;
            };
            window.scrollTo(0, $('#agenda').position().top + window.innerHeight);
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
            $('.close-info').click();
        });
        $('#header-agenda').click(function() {
            if (doc.scrollTop() < 10) {
                prevScroll = 100;
                body.stop().animate({scrollTop: 100}, 0);
                $('#header-agenda').click();
            };
            body.stop().animate({scrollTop: $('#agenda').position().top + window.innerHeight}, 1000);
            document.activeElement.blur();
        });        
    };
    
//----------- Edito scroll --------------
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
            
            if (prevScroll < 10) {
                animated = 0;
                $('.module').css('transition', 'transform 10ms ease-in-out');
                $('.module').css('-webkit-transform', 'translateY(-150vh)');
                $('.module').css('-moz-transform', 'translateY(-150vh)');
                $('.module').css('-ms-transform', 'translateY(-150vh)');
                $('.module').css('transform', 'translateY(-150vh)');
                $('.module').css('transition', 'transform 2000ms ease-in-out');
            }
            if (prevScroll + 10 < $('#68').position().top) {
                $('.carte').css('-webkit-transform', 'translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
                $('.carte').css('-moz-transform', 'translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
                $('.carte').css('-ms-transform', 'translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
                $('.carte').css('transform', 'translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
                $('.carte svg').css('opacity', '1');
                $('.carte-label').css('opacity', '0')                
            }
            else if (prevScroll) {
                $('.carte').css('-webkit-transform', 'translateY(100px)');
                $('.carte').css('-moz-transform', 'translateY(100px)');
                $('.carte').css('-ms-transform', 'translateY(100px)');
                $('.carte').css('transform', 'translateY(100px)');
                $('.carte-label').css('opacity', '0.7');
                if (animated == 0) {
                    startAnimation();
                };
            };
        });
        
        $('.carte').css('transform', '-webkit-translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
        $('.carte').css('transform', '-moz-translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
        $('.carte').css('transform', '-ms-translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
        $('.carte').css('transform', 'translateY('+(prevScroll - $('#68').position().top + 100)+'px)');
    }, 100);
    
    $('.scroll').click(function() {
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
            window.scrollTo(0, $('#68').position().top);
        }
        else {
            body.stop().animate({scrollTop: $('#68').position().top}, 1000);
        };
    });

//----------- 68 --------------
    $('.module').attr('tabindex', '-1');

    $('.modules-click .module').hover(function(){
     $('.' + $(this).attr('class').split(' ').pop()).css('opacity', '0.8');
    }, function() {
     $('.' + $(this).attr('class').split(' ').pop()).css('opacity', '1');       
    });
   
    $('.modules-click .module').click(function() {
       $('#' + $(this).attr('class').split(' ').pop().replace('module', 'info')).addClass('info-open');
       $('.info-open').addClass('info-transition');
       $('.info-open button').attr('tabindex', '0');
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
            window.scrollTo(0, $('#68').position().top);
        }
        else {
            body.stop().animate({scrollTop: $('#68').position().top}, 1000);
        };

//       $('.modules-click .module').attr('tabindex', '-1');
    });
    $('.close-info').click(function() {
       $('.info-open button').attr('tabindex', '-1');
//       $('.modules-click .module').attr('tabindex', '0');
       $('.info-open').addClass('info-transition');
       $('.info-open').removeClass('info-open');
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
        var pos = $('.' + id).offset().top - $('#timeline').offset().top + 2;

        $('#timeline').stop().animate({scrollTop: pos + prevPos}, 1000);
        prevPos += pos;
    });
    $('#timeline').on('scroll', function()  {
        prevPos = $('#timeline').scrollTop();
    });

    $('.agenda-header span').click(function() {
        $(this).find('.glyphicon');
    });
});
