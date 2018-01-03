
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
    
    $('.modules-display .module').each(function(){
        var that = $('.' + $(this).attr('class').split(' ').pop());
        setTimeout(function(){
            that.css('-webkit-transform', 'none');
            that.css('-moz-transform', 'none');
            that.css('-ms-transform', 'none');
            that.css('transform', 'none');
        }, Math.floor(Math.random() * 1000));
    });

    animated = 1;
};

var agendaTab = 0;
function showTimeline() {
    if (window.innerWidth < 850 && !agendaTab) {
        $('#timeline').css('cursor', 'initial');
        $('#timeline a').css('pointer-events', 'auto');
        $('#show-timeline').css('display', 'none');
        $('#show-recherche').css('display', 'block');
        $('#show-recherche').css('top', $('#recherche').scrollTop() + ($('#timeline').height() / 2.4));
        $('#recherche').css('right', '-80vw');
        $('#recherche').css('cursor', 'pointer');
        agendaTab = 1;
    }
};
function showRecherche() {
    if (window.innerWidth < 850 && agendaTab) {
        $('#recherche').css('right', '1.5%');
        $('#recherche').css('cursor', 'initial');
        $('#show-timeline').css('display', 'block');
        $('#show-timeline').css('top', $('#timeline').scrollTop() + ($('#timeline').height() / 2.4));
        $('#show-recherche').css('display', 'none');
        $('#timeline').css('cursor', 'pointer');
        $('#timeline a').css('pointer-events', 'none');
        agendaTab = 0;
    }
};

doc.ready(function () {
    window.scrollTop = 0;
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
            $('.close-info').click();
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
    prevScroll = 0;
    
    setTimeout(function() {
        
        doc.on('scroll', function () {
//            if (prevScroll < 10 && doc.scrollTop() > prevScroll)
//                body.stop().animate({scrollTop: $('#68').position().top}, 1000); 

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
                if (!navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    $('.module').css('-webkit-transform', 'translateY(-150vh)');
                    $('.module').css('-moz-transform', 'translateY(-150vh)');
                    $('.module').css('-ms-transform', 'translateY(-150vh)');
                    $('.module').css('transform', 'translateY(-150vh)');
                };
                $('.module').css('transition', 'transform 1500ms ease-in-out');
            }
            if (prevScroll + 10 < $('#68').position().top) {
                $('.carte').css('-webkit-transform', 'translateY('+(prevScroll - $('#68').position().top)+'px)');
                $('.carte').css('-moz-transform', 'translateY('+(prevScroll - $('#68').position().top)+'px)');
                $('.carte').css('-ms-transform', 'translateY('+(prevScroll - $('#68').position().top)+'px)');
                $('.carte').css('transform', 'translateY('+(prevScroll - $('#68').position().top)+'px)');
                $('.carte svg').css('opacity', '1');
                $('.carte-label').css('opacity', '0')                
            }
            else if (prevScroll) {
                $('.carte').css('-webkit-transform', 'translateY(0)');
                $('.carte').css('-moz-transform', 'translateY(0)');
                $('.carte').css('-ms-transform', 'translateY(0)');
                $('.carte').css('transform', 'translateY(0)');
                $('.carte-label').css('opacity', '0.7');
                if (animated == 0) {
                    startAnimation();
                };
                $('.carte svg').css('opacity', '0');
            };
        });
        
        $('.carte').css('transform', '-webkit-translateY('+(prevScroll - $('#68').position().top)+'px)');
        $('.carte').css('transform', '-moz-translateY('+(prevScroll - $('#68').position().top)+'px)');
        $('.carte').css('transform', '-ms-translateY('+(prevScroll - $('#68').position().top)+'px)');
        $('.carte').css('transform', 'translateY('+(prevScroll - $('#68').position().top)+'px)');
    }, 100);
    
    $('.scroll-footer').click(function() {
        if ($('.scroll-footer').hasClass('footer-open')) {
            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
                window.scrollTo(0, $('#agenda').position().top);
            }
            else {
                body.stop().animate({scrollTop: $('#agenda').position().top}, 300);
            };
            setTimeout(function() {
                $('footer').css('display', 'none');
                $('.scroll-footer').removeClass('footer-open');            
            }, 300);
        }
        else {
            $('.scroll-footer').addClass('footer-open');
            $('footer').css('display', 'block');
            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
                window.scrollTo(0, 999999);
            }
            else {
                body.stop().animate({scrollTop: document.body.scrollHeight}, 1000);
            };
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
//       $('.modules-click .module').attr('tabindex', '-1');
    });
    $('.close-info').click(function() {
       $('.info-open button').attr('tabindex', '-1');
//       $('.modules-click .module').attr('tabindex', '0');
       $('.info-open').addClass('info-transition');
       $('.info-open').removeClass('info-open');
        window.scrollTo(0, $('#68').position().top);
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
        var pos = $('.' + id).offset().top - $('#timeline').offset().top;
        console.log($('.' + id));
        if (window.innerWidth < 850) {
            if (!agendaTab) {
                setTimeout(function(){showTimeline()}, 100);                
                $('#timeline').stop().animate({scrollTop: pos + prevPos}, 1000);
                prevPos += pos;
            }
        }
        else {
            $('#timeline').stop().animate({scrollTop: pos + prevPos}, 1000);            
            prevPos += pos;
        };
    });
    $('#timeline').on('scroll', function()  {
        prevPos = $('#timeline').scrollTop();
        $('#show-timeline').css('top', $('#timeline').scrollTop() + ($('#timeline').height() / 2.4));
    });
    $('#recherche').on('scroll', function()  {
        $('#show-recherche').css('top', $('#recherche').scrollTop() + ($('#recherche').height() / 2.4));
    });

});

window.onresize = function(event) {
    if (window.innerWidth < 850) {
        agendaTab = 1;
        showRecherche();
    }
    else {
        $('#timeline').css('left', '0');
        $('#timeline').css('cursor', 'initial');
        $('#timeline').css('overflow-y', 'scroll');
        $('#timeline a').css('pointer-events', 'auto');
        $('#show-timeline').css('display', 'none');
        $('#show-recherche').css('display', 'none');
        $('#recherche').css('right', '1.5%');
        $('#recherche').css('cursor', 'initial');
        $('#recherche').css('overflow-y', 'scroll');
    }
        
};