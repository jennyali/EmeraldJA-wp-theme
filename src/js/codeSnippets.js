
/*=============================================

                CODE SNIPPETS

* code taken from previous projects.

===============================================*/


//----------    INTO VIEW SCROLL EFFECTS --------------------------//

(function($) {

    var $window = $(window);

    $window.on('scroll', check_if_in_view); //---- scroll event 

    function check_if_in_view(){
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($('section[data-scroll="in-view-animation"]'), function(){
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)){
                $element.addClass('in-view');
            } 
            /*else {
                $element.removeClass('in-view');
            }*/
        });
    }
    
})( jQuery );