
//# Styles for Webpack Bundleling
require('../sass/styles.scss');


(function($) {

    console.log('yo yo my script works');
	
    //# Functionality
    require('./codeSnippets.js');

    //# Element Event Handlers
    require('./headerMenuHandler.js');
    require('./smootheScroll.js');
    require('./heroHandler.js');

    //# Sick Slider
    require('./slickSlider.js');

    //# Carousel 
    require('./carouselHandler.js');

})( jQuery );