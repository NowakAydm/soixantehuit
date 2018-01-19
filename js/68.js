var doc = $(document);
var body = $('html, body');
var prevScroll = 0;
var calc = 0;
var scrolling = 0;
var pagePos = 1;
var prevPagePos = 1;

function isScrolledIntoView(elem) {
    var docViewBottom = $(window).scrollTop() + $(window).height();
    var elemTop = $(elem).offset().top + $(elem).height();

    return (elemTop >= docViewBottom - 50);
};

var animated = 0;

function startAnimation() {
    $('.modules .module').each(function () {
        var that = $('.' + $(this).attr('class').split(' ').pop() + ':not(.module-mobile)');
        setTimeout(function () {
            that.css('-webkit-transform', 'none');
            that.css('-moz-transform', 'none');
            that.css('-ms-transform', 'none');
            that.css('-o-transform', 'none');
            that.css('transform', 'none');
        }, Math.floor(Math.random() * 750));
    });

    animated = 1;
};

function showTimeline() {
    if (window.innerWidth < 850) {
        $('#timeline').addClass('timeline-shown');
        $('#show-timeline').css('display', 'none');
        $('#show-recherche').css('display', 'block');
        $('#recherche').css('cursor', 'pointer');
    }
};

function showRecherche() {
    if (window.innerWidth < 850) {
        $('#recherche').css('cursor', 'initial');
        $('#show-timeline').css('display', 'block');
        $('#show-recherche').css('display', 'none');
        $('#timeline').removeClass('timeline-shown');
    }
};

doc.ready(function () {
    window.scrollTop = 0;
    window.scrollTo(0, 0);

    $('.timeline-shown').removeClass('.timeline-shown');
    //----------- Header scroll --------------
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
        $('#header-accueil').click(function () {
            document.activeElement.blur();
            window.scrollTo(0, 0);
        });
        $('#header-68').click(function () {
            document.activeElement.blur();
            window.scrollTo(0, $('#68').position().top);
            $('.close-info').click();
        });
        $('#header-agenda').click(function () {
            window.scrollTo(0, $('#agenda').position().top);
            document.activeElement.blur();
        });
    } else {
        $('#header-accueil').click(function () {
            document.activeElement.blur();
            body.stop().animate({
                scrollTop: 0
            }, 1000);
            scrolling = 1;
            setTimeout(function () {
                scrolling = 0;
            }, 1000);
        });
        $('#header-68').click(function () {
            document.activeElement.blur();
            body.stop().animate({
                scrollTop: $('#68').position().top
            }, 1000);
            scrolling = 1;
            setTimeout(function () {
                scrolling = 0;
            }, 1000);
        });
        $('#header-agenda').click(function () {
            body.stop().animate({
                scrollTop: $('#agenda').position().top
            }, 1000);
            document.activeElement.blur();
            scrolling = 1;
            setTimeout(function () {
                scrolling = 0;
            }, 1000);
        });
    };

    prevScroll = 0;

    setTimeout(function () {

        doc.on('scroll', function () {

    //----------- Header position detection --------------
            if (isScrolledIntoView($('#home'))) {
                prevPagePos = pagePos;
                pagePos = 1;
                $('#header-accueil > .header-background').removeClass('hidden');
                $('#header-68 > .header-background').addClass('hidden');
                $('#header-agenda > .header-background').addClass('hidden');
            } else if (isScrolledIntoView($('#68'))) {
                prevPagePos = pagePos;
                pagePos = 2;
                $('#header-accueil > .header-background').addClass('hidden');
                $('#header-68 > .header-background').removeClass('hidden');
                $('#header-agenda > .header-background').addClass('hidden');
            } else if (isScrolledIntoView($('#agenda'))) {
                prevPagePos = pagePos;
                pagePos = 3;
                $('#header-accueil > .header-background').addClass('hidden');
                $('#header-68 > .header-background').addClass('hidden');
                $('#header-agenda > .header-background').removeClass('hidden');
                showRecherche();
                prevPos = $('#timeline').scrollTop()
            };

            $('.header-background').parent().css('border-bottom', 'none');
            $('.header-background.hidden').parent().css('border-bottom', 'dotted 1px black');

    //----------- Forced scroll --------------     
                
                if (pagePos == 2 && prevPagePos == 1 && !scrolling && !navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    body.stop().animate({
                        scrollTop: $('#68').position().top
                    }, 1000);
                } else if (pagePos == 3 && prevPagePos == 2 && !scrolling && !navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    body.stop().animate({
                        scrollTop: $('#agenda').position().top
                    }, 1000);
                };
            
                if (doc.scrollTop() < prevScroll && ($('#68').position().top - doc.scrollTop()) < 10 && ($('#68').position().top - doc.scrollTop()) > 0 && !scrolling && !navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    body.stop().animate({
                        scrollTop: 0
                    }, 1000);                
                }
                if (doc.scrollTop() < prevScroll && ($('#agenda').position().top - doc.scrollTop()) < 10 && ($('#agenda').position().top - doc.scrollTop()) > 0 && !scrolling && !navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    body.stop().animate({
                        scrollTop: $('#68').position().top + 2
                    }, 1000);                
                }
    //----------- Animation triggering --------------            
            calc = prevScroll - $('#68').position().top;
            if (prevScroll + 10 < $('#68').position().top && animated == 0) {
                $('.carte').css('-webkit-transform', 'translateY(' + calc + 'px)');
                $('.carte').css('-moz-transform', 'translateY(' + calc + 'px)');
                $('.carte').css('-ms-transform', 'translateY(' + calc + 'px)');
                $('.carte').css('transform', 'translateY(' + calc + 'px)');
                $('.carte svg').css('opacity', '1');
                $('.carte-label').css('opacity', '0')
            } else if (prevScroll) {
                if (animated == 0) {
                    startAnimation();
                };
                $('.carte').css('-webkit-transform', 'translateY(0)');
                $('.carte').css('-moz-transform', 'translateY(0)');
                $('.carte').css('-ms-transform', 'translateY(0)');
                $('.carte').css('transform', 'translateY(0)');
                $('.carte-label').css('opacity', '0.7');
                $('.carte svg').css('opacity', '0');
            };
            
            prevScroll = doc.scrollTop();
        });
        calc = prevScroll - $('#68').position().top;
        $('.carte').css('transform', '-webkit-translateY(' + calc + 'px)');
        $('.carte').css('transform', '-moz-translateY(' + calc + 'px)');
        $('.carte').css('transform', '-ms-translateY(' + calc + 'px)');
        $('.carte').css('transform', 'translateY(' + calc + 'px)');
    }, 100);

    //----------- Footer toggle --------------            
    $('.scroll-footer').click(function () {
        if ($('.scroll-footer').hasClass('footer-open')) {
            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
            } else {
                body.stop().animate({
                    scrollTop: $('#agenda').position().top + 5
                }, 300);
            };
            setTimeout(function () {
                $('footer').css('display', 'none');
                $('.scroll-footer').removeClass('footer-open');
            }, 300);
        } else {
            $('.scroll-footer').addClass('footer-open');
            $('footer').css('display', 'block');
            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                window.scrollTo(0, 999999);
            } else {
                body.stop().animate({
                    scrollTop: document.body.scrollHeight
                }, 1000);
            };
        };
    });

    //----------- 68 --------------
    $('.info-container a').attr('tabindex', '-1');
    $('.module').attr('tabindex', '-1');
    $('.module').on('focus', function () {
        document.activeElement.blur();
    });

    $('.modules-click .module').hover(function () {
        $('.' + $(this).attr('class').split(' ').pop()).css('opacity', '0.8');
        $('.' + $(this).attr('class').split(' ').pop().replace('module', 'carte')).addClass('carte-hover');
    }, function () {
        $('.' + $(this).attr('class').split(' ').pop()).css('opacity', '1');
        $('.' + $(this).attr('class').split(' ').pop().replace('module', 'carte')).removeClass('carte-hover');
    });

    $('.modules-click .module').click(function () {
        document.activeElement.blur();
        $('#' + $(this).attr('class').split(' ').pop().replace('module', 'info')).addClass('info-open');
        $('.info-open').addClass('info-transition');
    });
    $('.close-info').click(function () {
        $('.info-open').addClass('info-transition');
        $('.info-open').removeClass('info-open');
        body.stop().animate({
            scrollTop: $('#68').position().top + 5
        }, 50);                
        window.scrollTo(0, $('#68').position().top + 5);
    });

    $('.info-container').on('transitionend', function () {
        $(this).removeClass('info-transition');
    });

    //----------- Agenda --------------
    searchReady();
    if (window.innerWidth < 850) {    
        $('#timeline').css('height', (window.innerHeight -170)+'px');
        $('#recherche').css('height', (window.innerHeight -170)+'px');
    }
    else {
        $('#timeline').css('height', (window.innerHeight - 200)+'px');
        $('#recherche').css('height', (window.innerHeight - 200)+'px');        
    }
    $('#timeline').stop().animate({
        scrollTop: -99999999
    }, 1000);

    var prevPos = 3;
    $('.evenement').click(function () {
        var id = $(this).attr('id');
        var pos = $('.' + id).offset().top - $('#timeline').offset().top;
        if (window.innerWidth < 850) {
            setTimeout(function () {
                showTimeline()
            }, 100);
            $('#timeline').stop().animate({
                scrollTop: pos + prevPos
            }, 1000);
            prevPos += pos;
        } else {
            $('#timeline').stop().animate({
                scrollTop: pos + prevPos
            }, 1000);
            prevPos += pos;
        };
    });
    $('#timeline').on('scroll', function () {
        prevPos = $('#timeline').scrollTop();
    });
    $('#show-timeline').click(function() {
        setTimeout(function () {
                showTimeline()
            }, 100);
    });
    $('#show-recherche').click(function() {
        setTimeout(function () {
                showRecherche()
            }, 100);
    });
});

window.onresize = function (event) {
    if (window.innerWidth < 850) {
        $('#show-timeline').css('display', 'block');
        
    } else {
        $('#timeline').removeClass('timeline-shown');
        $('#show-timeline').css('display', 'none');
        $('#show-recherche').css('display', 'none');
        $('#recherche').css('left', '0');
        $('#recherche').css('cursor', 'initial');
        $('#recherche').css('overflow-y', 'scroll');
    };
    if (window.innerWidth < 850) {    
        $('#timeline').css('height', (window.innerHeight -170)+'px');
        $('#recherche').css('height', (window.innerHeight -170)+'px');
    }
    else {
        $('#timeline').css('height', (window.innerHeight - 200)+'px');
        $('#recherche').css('height', (window.innerHeight - 200)+'px');        
    }
};