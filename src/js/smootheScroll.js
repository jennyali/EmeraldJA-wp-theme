import $ from 'jquery';

/*========================================

                VIEW

==========================================*/

//# Selectors


//# Events



/*========================================

                CONTROLLER

==========================================*/

//# scroll effect - pass in a jquery selector for param.

function clickScroll(selector){           
    $('body').animate({
        scrollTop: selector.offset().top -145
    }, 1000);
}