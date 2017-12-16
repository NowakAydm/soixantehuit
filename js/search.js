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
    

    $('.search-lieu').css('color', 'white');

    $('.clear-lieu').click(function() {
        $('.search-lieu').css('color', 'white');
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
    $('.search-lieu').css('color', 'inherit');
    $('.search-lieu').removeClass(curPlace); 
    $('.search-lieu').addClass('lieu'+a); 
    curPlace = 'lieu'+a;
    $('.evenement').addClass('hide-lieu');
    $('.infos.'+curPlace).parent().removeClass('hide-lieu');
    $('#filtre-lieu').click();
};
