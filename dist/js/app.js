/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {


//# Styles for Webpack Bundleling
__webpack_require__(2);

(function ($) {

    console.log('yo yo my script works');

    //# Functionality
    __webpack_require__(3);

    //# Element Event Handlers
    __webpack_require__(4);
    __webpack_require__(5);
    __webpack_require__(6);

    //# Sick Slider
    __webpack_require__(7);

    //# Carousel 
    __webpack_require__(8);
})(jQuery);

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {


/*=============================================

                CODE SNIPPETS

* code taken from previous projects.

===============================================*/

//----------    INTO VIEW SCROLL EFFECTS --------------------------//

var $window = $(window);

$window.on('scroll', check_if_in_view); //---- scroll event 

function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;

    $.each($('section[data-scroll="in-view-animation"]'), function () {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = element_top_position + element_height;

        if (element_bottom_position >= window_top_position && element_top_position <= window_bottom_position) {
            $element.addClass('in-view');
        }
        /*else {
            $element.removeClass('in-view');
        }*/
    });
}

/***/ }),
/* 4 */
/***/ (function(module, exports) {


/*========================================

                VIEW

==========================================*/

//# Selectors

var headerMenuBtn = $('#header-menu-btn');
var headerMenu = $('#header-menu');
var body = $('body');

//# Events

headerMenuBtn.on({
    'click': function click(e) {
        headerMenuBtnHandler(e);
    }
});

/*=========================================

                Controller

============================================*/

function headerMenuBtnHandler(e) {
    e.preventDefault();
    body.toggleClass('header-menu-open');
    headerMenu.toggleClass('menu-open');
}

/***/ }),
/* 5 */
/***/ (function(module, exports) {

/*========================================

                VIEW

==========================================*/

//# Selectors


//# Events


/*========================================

                CONTROLLER

==========================================*/

//# scroll effect - pass in a jquery selector for param.

function clickScroll(selector) {
    $('body').animate({
        scrollTop: selector.offset().top - 145
    }, 1000);
}

/***/ }),
/* 6 */
/***/ (function(module, exports) {

/*========================================

                VIEW

==========================================*/

//# Selectors
var $homeHeroSection = $('#home_hero');
var $heroInnerTextBox = $('.item__text-container__inner-box');

//# Events


//console.log($heroInnerTextBox);


/*========================================

                CONTROLLER

==========================================*/
function heroInnerTextBoxHandler(selector) {
                setTimeout(selector.addClass('carousel-textbox-move'), 3000);
}

heroInnerTextBoxHandler($heroInnerTextBox);

/***/ }),
/* 7 */
/***/ (function(module, exports) {


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
  responsive: [{
    breakpoint: 768,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 3
    }
  }, {
    breakpoint: 480,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 1
    }
  }]
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

  singPortPostSlickSlider.find(selector).addClass(classname + ' btn-custom-5').text('');
}

//changeSlickArrow('.slick-next', 'icon-arrow-40');
//changeSlickArrow('.slick-prev', 'icon-arrow-39');

/***/ }),
/* 8 */
/***/ (function(module, exports) {

/*========================================

                VIEW

==========================================*/

//# Selectors
var $carouselDots = $('.carousel-indicators li');
var $carouselFirstItem = $('.item:first-child.active');

//# Events

$carouselDots.on({
    'click': function click() {
        carouselHandler();
    }
});

/*=========================================

                Controller

============================================*/
function carouselHandler() {
    $carouselFirstItem.removeClass('first-load');
}

/***/ })
/******/ ]);
//# sourceMappingURL=app.js.map