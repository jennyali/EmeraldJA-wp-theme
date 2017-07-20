
//# Styles for Webpack Bundleling
require('../sass/styles.scss');


(function($) {

    //console.log('yo yo my script works');
	
    //# Functionality
    require('./codeSnippets.js');

    //# Element Event Handlers
    require('./headerMenuHandler.js');
    require('./smootheScroll.js');
    require('./heroHandler.js');

    //# Carousel 
    require('./carouselHandler.js');

    //# Portfolio Section Menu Ajax
    require('./portSectionMenuAjax.js');

    //# Porfolio Section masonry panels
    require('./masonryPanels.js');


    //# Sick Slider
    //require('./slickSlider.js'); NOTE: can only get the script to work in the main app.js file.

    /*========================================

                    VIEW

    ==========================================*/

    var singPortPostSlickSlider = $('.single-portflio-post__slick-silder');
    var $slickPrevArrow = $('.slick-prev');
    var $slickNextArrow = $('.slick-next');

    $('.center').slick({
        prevArrow: '<button type="button" class="slick-prev btn-custom-5 icon-arrow-39"></button>',
        nextArrow: '<button type="button" class="slick-next btn-custom-5 icon-arrow-40"></button>',
        arrows: true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });

    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.center',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true
    });

    /*========================================

                    CONTROLLER

    ==========================================*/

    //# to change the default slick slider buttons with text to no text and arrow icons.
    function changeSlickArrow(selector, classname) {

        singPortPostSlickSlider
            .find(selector)
            .addClass(classname + ' btn-custom-5')
            .text('');
    }

    //console.log( 'end of script, still working.' );

})( jQuery );