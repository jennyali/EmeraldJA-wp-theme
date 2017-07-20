import $ from 'jquery';

/*========================================

                VIEW

==========================================*/

//# Selectors
var $masonryPanels = $('.masonry-layout__panel');


//# Events




$masonryPanels.on({
    load : function() {
        masonryPanelsHandler();
        console.log('hello');
    }
});


/*========================================

                CONTROLLER

==========================================*/
function masonryPanelsHandler() {
    $masonryPanels.addClass('fade-in');
}