
/*========================================

                VIEW

==========================================*/

//# Selectors

var headerMenuBtn = $('#header-menu-btn');
var headerMenu = $('#header-menu');
var body = $('body');


//# Events

headerMenuBtn.on({
    'click' : function (e) {
        headerMenuBtnHandler(e);
    }
})

/*=========================================

                Controller

============================================*/

function headerMenuBtnHandler(e) {
    e.preventDefault();
    body.toggleClass('header-menu-open');
    headerMenu.toggleClass('menu-open');
}