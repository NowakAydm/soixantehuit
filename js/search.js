function searchReady() {
    $('#filtre-lieu').popover({
        placement: 'bottom',
        html: 'true',
        content: "<ul class='list-group list-lieux'>\
                      <li class='list-group-item lieu74030026' onclick='addPlace(74030026)'>Archives nationales</li>\
                      <li class='list-group-item lieu37250659' onclick='addPlace(37250659)'>Beaux-Arts de Paris</li>\
                      <li class='list-group-item lieu96612516' onclick='addPlace(96612516)'>Bibliothèque nationale de France</li>\
                      <li class='list-group-item lieu44057765' onclick='addPlace(44057765)'>Centre Pompidou</li>\
                      <li class='list-group-item lieu33873846' onclick='addPlace(33873846)'>La Cinémathèque française</li>\
                      <li class='list-group-item lieu97092341' onclick='addPlace(97092341)'>Cité de l’architecture & du patrimoine</li>\
                      <li class='list-group-item lieu47774204' onclick='addPlace(47774204)'>Nanterre-Amandiers</li>\
                      <li class='list-group-item lieu49592631' onclick='addPlace(49592631)'>Université Paris Nanterre</li>\
                      <li class='list-group-item lieu' onclick='addPlace()'>"+($('.agenda-header h1').html() == 'Agenda' ? 'Autres lieux' : 'Other places')+"</li>\
                    </ul>"
    });
    $('#filtre-lieu').on('show.bs.popover', function() {
        $('#filtre-lieu .glyphicon').css('-webkit-transform', 'rotate(90deg)');
        $('#filtre-lieu .glyphicon').css('-moz-transform', 'rotate(90deg)');
        $('#filtre-lieu .glyphicon').css('-o-transform', 'rotate(90deg)');
        $('#filtre-lieu .glyphicon').css('-ms-transform', 'rotate(90deg)');
        $('#filtre-lieu .glyphicon').css('transform', 'rotate(90deg)');
    });
    $('#filtre-lieu').on('hide.bs.popover', function() {
        $('#filtre-lieu .glyphicon').css('-webkit-transform', 'none');
        $('#filtre-lieu .glyphicon').css('-moz-transform', 'none');
        $('#filtre-lieu .glyphicon').css('-o-transform', 'none');
        $('#filtre-lieu .glyphicon').css('-ms-transform', 'none');
        $('#filtre-lieu .glyphicon').css('transform', 'none');
    });
    if ($('.agenda-header h1').html() == 'Events') {
        $('#filtre-categorie').popover({
            placement: 'bottom',
            html: 'true',
            content: "<ul class='list-group list-categorie'>\
                          <li class='list-group-item' onclick='addCategory(1)'>Projection</li>\
                          <li class='list-group-item' onclick='addCategory(2)'>Performance/Show</li>\
                          <li class='list-group-item' onclick='addCategory(3)'>Seminar/Conference/Debate</li>\
                          <li class='list-group-item' onclick='addCategory(4)'>Exhibition</li>\
                        </ul>"
        });
    }
    else {
        $('#filtre-categorie').popover({
            placement: 'bottom',
            html: 'true',
            content: "<ul class='list-group list-categorie'>\
                          <li class='list-group-item' onclick='addCategory(1)'>Projection</li>\
                          <li class='list-group-item' onclick='addCategory(2)'>Performance/Spectacle</li>\
                          <li class='list-group-item' onclick='addCategory(3)'>Colloque/Conférence/Débat</li>\
                          <li class='list-group-item' onclick='addCategory(4)'>Exposition</li>\
                        </ul>"
        });
    };
    $('#filtre-categorie').on('show.bs.popover', function() {
        $('#filtre-categorie .glyphicon').css('-webkit-transform', 'rotate(90deg)');
        $('#filtre-categorie .glyphicon').css('-moz-transform', 'rotate(90deg)');
        $('#filtre-categorie .glyphicon').css('-o-transform', 'rotate(90deg)');
        $('#filtre-categorie .glyphicon').css('-ms-transform', 'rotate(90deg)');
        $('#filtre-categorie .glyphicon').css('transform', 'rotate(90deg)');
    });
    $('#filtre-categorie').on('hide.bs.popover', function() {
        $('#filtre-categorie .glyphicon').css('-webkit-transform', 'none');
        $('#filtre-categorie .glyphicon').css('-moz-transform', 'none');
        $('#filtre-categorie .glyphicon').css('-o-transform', 'none');
        $('#filtre-categorie .glyphicon').css('-ms-transform', 'none');
        $('#filtre-categorie .glyphicon').css('transform', 'none');
    });
    
    
    
    function convertDate( a ) {
        var out = "-";
        if (a[1] == '/')
            out = a.slice(2, 4)+"-0"+a[0];
        else
            out = a.slice(3, 5)+"-"+a.slice(0, 2);
        return (out);
    };
    var curDate = 0;
    $('#datetimepicker').datetimepicker({
        widgetPositioning: {horizontal: 'auto', vertical: 'bottom'},
        locale: 'fr',
        format: 'D/MM',
        minDate: moment('2018/01/01', 'YYYY/MM/DD'),
        maxDate: moment('2018/12/31', 'YYYY/MM/DD'),
        ignoreReadonly: true
    });
    $('#datetimepicker').val('Date');
    $('#datetimepicker').on('dp.show', function(){
        $('#glyphicon').css('-webkit-transform', 'rotate(90deg)');
        $('#glyphicon').css('-moz-transform', 'rotate(90deg)');
        $('#glyphicon').css('-o-transform', 'rotate(90deg)');
        $('#glyphicon').css('-ms-transform', 'rotate(90deg)');
        $('#glyphicon').css('transform', 'rotate(90deg)');
    });
    $('#datetimepicker').on('dp.hide', function(){        
        $('#glyphicon').css('-webkit-transform', 'none');
        $('#glyphicon').css('-moz-transform', 'none');
        $('#glyphicon').css('-o-transform', 'none');
        $('#glyphicon').css('-ms-transform', 'none');
        $('#glyphicon').css('transform', 'none');

        curDate = $('#datetimepicker').val();
        $('.search-date').css('display', 'block');
        $('.search-date').css('background', 'black');
        $('.search-date').html('<i class="glyphicon glyphicon-remove clear-date"></i>'+$('#datetimepicker').val());
        $('#datetimepicker').val('Date');
        $('.evenement').addClass('hide-date');
        for (var x = 0; x < events.length ; x++) {
            for (var y = 0 ; y < events[x].timings.length ; y++) {
                if (events[x].timings[y].start.slice(5, 10) == convertDate(curDate))
                    $('#'+events[x].uid).removeClass('hide-date');
            }            
        }
        $('.search-date').css('cursor', 'pointer');

        $('.clear-date').click(function() {
            $('.search-date').html('');
            $('.search-date').css('cursor', 'initial');
            $('.search-date').css('background', 'white');
            $('.search-date').css('display', 'none');
            $('.evenement').removeClass('hide-date');
            setTimeout(function(){showRecherche()}, 100);                
        });
        setTimeout(function(){showRecherche()}, 100);                
    });
    var now = new Date;
    var eDate;
    
    for (var x = 0; x < events.length ; x++) {
        eDate = new Date(events[x].timings[events[x].timings.length-1].start);
        if (now >= eDate)
            $('#'+events[x].uid).addClass('past-date');
    }
    setTimeout(function() {$('.evenement:not(.past-date)').first().click();}, 200);

    $('.search-lieu .glyphicon').css('color', 'white');
    $('.search-categorie .glyphicon').css('color', 'white');

    $('.clear-lieu').click(function() {
        $('.search-lieu').css('display', 'none');
        $('.search-lieu').css('cursor', 'initial');
        $('.search-lieu .glyphicon').css('color', 'white');
        $('.search-lieu').removeClass(curPlace);  
        $('.evenement').removeClass('hide-lieu');
        setTimeout(function(){showRecherche()}, 100);                
    });
    
    $('body').on('click', function (e) {
        $('[data-toggle=popover]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
};

var curPlace;
function addPlace( a ) {
    $('.info-open .close-info').click();
    $('.search-lieu').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>');
    if (a == 49592631)
        $('.search-lieu').append('<span>Université Paris Nanterre</span>');
    else if (a == 47774204)
        $('.search-lieu').append('<span>Nanterre-Amandiers</span>');
    else if (a == 97092341)
        $('.search-lieu').append("<span>Cité de l’architecture & du patrimoine</span>");
    else if (a == 37250659)
        $('.search-lieu').append('<span>Beaux-Arts de Paris</span>');
    else if (a == 44057765)
        $('.search-lieu').append('<span>Centre Pompidou</span>');
    else if (a == 74030026)
        $('.search-lieu').append('<span>Archives nationales</span>');
    else if (a == 96612516)
        $('.search-lieu').append('<span>Bibliothèque nationale de France</span>');
    else if (a == 33873846)
        $('.search-lieu').append('<span>La Cinémathèque française</span>');
    else
        $('.search-lieu').append(($('.agenda-header h1').html() == 'Agenda' ? '<span>Autres lieux</span>' : '<span>Other places</span>'));

    $('.search-lieu .glyphicon').css('color', 'inherit');
    $('.search-lieu').css('display', 'block');
    $('.search-lieu').css('cursor', 'pointer');
    $('.search-lieu').removeClass(curPlace); 
    if (a == 74030026) {
        $('.search-lieu').addClass('lieu'+a); 
        curPlace = 'lieu'+a;
        $('.evenement').addClass('hide-lieu');
        $('.infos.lieu74030026').parent().removeClass('hide-lieu');
        $('.infos.lieu64232241').parent().removeClass('hide-lieu');
    }
    else if (a) {
        $('.search-lieu').addClass('lieu'+a); 
        curPlace = 'lieu'+a;
        $('.evenement').addClass('hide-lieu');
        $('.infos.'+curPlace).parent().removeClass('hide-lieu');
    }
    else {
        $('.search-lieu').addClass('lieu'); 
        curPlace = 'lieu';
        $('.infos.lieu49592631').parent().addClass('hide-lieu');
        $('.infos.lieu47774204').parent().addClass('hide-lieu');
        $('.infos.lieu97092341').parent().addClass('hide-lieu');
        $('.infos.lieu37250659').parent().addClass('hide-lieu');
        $('.infos.lieu44057765').parent().addClass('hide-lieu');
        $('.infos.lieu74030026').parent().addClass('hide-lieu');
        $('.infos.lieu64232241').parent().addClass('hide-lieu');
        $('.infos.lieu96612516').parent().addClass('hide-lieu');
        $('.infos.lieu33873846').parent().addClass('hide-lieu');
        
    };  
    $('#filtre-lieu').click();
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
        window.scrollTo(0, $('#agenda').position().top);
    }
    else {
        body.stop().animate({scrollTop: $('#agenda').position().top}, 1000);
    };
    setTimeout(function(){showRecherche()}, 100);                
};

var curCategorie;
function addCategory( a ) {
    $('.search-categorie').css('display', 'block');
    $('.search-categorie').css('cursor', 'pointer');
    $('.search-categorie').css('background', 'black');
    if (a == 1)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>Projection');
    else if (a == 2)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>'+($('.agenda-header h1').html() == 'Agenda' ? 'Performance/Spectacle' : 'Performance/Show'));
    else if (a == 3)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>'+($('.agenda-header h1').html() == 'Agenda' ? 'Colloque/Conférence/Débat' : 'Seminar/Conference/Debate'));
    else if (a == 4)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>'+($('.agenda-header h1').html() == 'Agenda' ? 'Exposition' : 'Exhibition'));

    curCategorie = 'cat'+a;
    $('.evenement').addClass('hide-categorie');
    $('.'+curCategorie).removeClass('hide-categorie');
    $('#filtre-categorie').click();
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
        window.scrollTo(0, $('#agenda').position().top);
    }
    else {
        body.stop().animate({scrollTop: $('#agenda').position().top}, 1000);
    };
    
    $('.clear-categorie').click(function() {
        $('.evenement').removeClass('hide-categorie');
        $('.search-categorie').css('display', 'none');
        $('.search-categorie').css('cursor', 'initial');
        $('.search-categorie').html("");
        setTimeout(function(){showRecherche()}, 100);                
    });
    setTimeout(function(){showRecherche()}, 100);                
};