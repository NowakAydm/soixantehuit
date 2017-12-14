function searchReady() {
    $('[data-toggle="popover"]').popover();

    $('.search-lieu').css('color', 'white');

    $('.clear-lieu').click(function() {
        $('.search-lieu').css('color', 'white');
        $('.search-lieu').removeClass(curPlace);  
        $('.evenement').removeClass('hide-lieu');
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
    console.log($('.'+curPlace));
}