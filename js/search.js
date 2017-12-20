function searchReady() {
    $('#filtre-lieu').popover({
        placement: 'bottom',
        html: 'true',
        content: "<ul class='list-group list-lieux'>\
                      <li class='list-group-item lieu74030026' onclick='addPlace(74030026)'>Archives Nationales</li>\
                      <li class='list-group-item lieu37250659' onclick='addPlace(37250659)'>Beaux-arts de Paris</li>\
                      <li class='list-group-item lieu96612516' onclick='addPlace(96612516)'>BnF</li>\
                      <li class='list-group-item lieu44057765' onclick='addPlace(44057765)'>Centre Pompidou</li>\
                      <li class='list-group-item lieu33873846' onclick='addPlace(33873846)'>Cinémathèque</li>\
                      <li class='list-group-item lieu97092341' onclick='addPlace(97092341)'>Cité de l'Architecture</li>\
                      <li class='list-group-item lieu47774204' onclick='addPlace(47774204)'>Nanterre Amandiers</li>\
                      <li class='list-group-item lieu49592631' onclick='addPlace(49592631)'>Université Paris Nanterre</li>\
                    </ul>",
    });
    $('#filtre-categorie').popover({
        placement: 'bottom',
        html: 'true',
        content: "<ul class='list-group list-categorie'>\
                      <li class='list-group-item' onclick='addCategory(1)'>Projection</li>\
                      <li class='list-group-item' onclick='addCategory(2)'>Performance/Spectacle</li>\
                      <li class='list-group-item' onclick='addCategory(3)'>Colloque/Conférence/Débat</li>\
                      <li class='list-group-item' onclick='addCategory(4)'>Exposition</li>\
                    </ul>",
    });
    function convertDate( a ) {
        var out = "-";
        if (a[1] == '/')    //Days
            out = a.slice(2, 4)+"-0"+a[0];
        else
            out = a.slice(3, 5)+"-"+a.slice(0, 2);
        return (out);
    };
    var curDate = 0;
    $('#datetimepicker').datetimepicker({
        locale: 'fr',
        format: 'D/MM',
        minDate: moment('2018/01/01', 'YYYY/MM/DD'),
        maxDate: moment('2018/12/31', 'YYYY/MM/DD')
    });
    $('#datetimepicker').val('Date');
    $('#datetimepicker').on('dp.hide', function(){        
        curDate = $('#datetimepicker').val();
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

        $('.clear-date').click(function() {
            $('.search-date').html('');
            $('.search-date').css('background', 'white');
            $('.evenement').removeClass('hide-date');
        });
    });
    
    $('.search-lieu .glyphicon').css('color', 'white');
    $('.search-categorie .glyphicon').css('color', 'white');

    $('.clear-lieu').click(function() {
        $('.search-lieu .glyphicon').css('color', 'white');
        $('.search-lieu').removeClass(curPlace);  
        $('.evenement').removeClass('hide-lieu');
    });
    
    $('body').on('click', function (e) {
        $('[data-toggle=popover]').each(function () {
            // hide any open popovers when the anywhere else in the body is clicked
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
};

var curPlace;
function addPlace( a ) {
    $('.search-lieu .glyphicon').css('color', 'inherit');
    $('.search-lieu').removeClass(curPlace); 
    $('.search-lieu').addClass('lieu'+a); 
    curPlace = 'lieu'+a;
    $('.evenement').addClass('hide-lieu');
    $('.infos.'+curPlace).parent().removeClass('hide-lieu');
    $('#filtre-lieu').click();
    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
        window.scrollTo(0, $('#agenda').position().top);
    }
    else {
        body.stop().animate({scrollTop: $('#agenda').position().top}, 1000);
    };
};

var curCategorie;
function addCategory( a ) {
    $('.search-categorie').css('background', 'black');
    if (a == 1)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>Projection');
    else if (a == 2)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>Spectacle');
    else if (a == 3)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>Conférence');
    else if (a == 4)
        $('.search-categorie').html('<i class="glyphicon glyphicon-remove clear-categorie"></i>Exposition');

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
        $('.search-categorie').css('background', 'white');
        $('.search-categorie').html("");
    });
};