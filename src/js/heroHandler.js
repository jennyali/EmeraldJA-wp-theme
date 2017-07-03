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
    setTimeout( selector.addClass('carousel-textbox-move') , 3000);
}

heroInnerTextBoxHandler($heroInnerTextBox);
