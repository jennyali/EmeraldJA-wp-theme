import $ from 'jquery';

/*========================================

                VIEW

==========================================*/

//# Selectors
var $carouselDots = $('.carousel-indicators li');
var $carouselFirstItem = $('.item:first-child.active');


//# Events

$carouselDots.on({
    'click' : function() {
        carouselHandler();
    }
});


/*=========================================

                Controller

============================================*/
function carouselHandler() {
    $carouselFirstItem.removeClass('first-load');
}