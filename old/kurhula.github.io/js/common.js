/***********************
 *  Globals
 ***********************/
var mobileWindow = false;

closeContent = function (main) {
    if (typeof main == 'undefined')
        return;

    if (main.css('left') == '0px' || main.css('left') == 'auto') {
        var contentWidth = main.outerWidth();
        main.animate({left: '-' + contentWidth + 'px'}).addClass('content-close', 700);
    }
}

openContent = function (main) {
    if (typeof main == 'undefined')
        return;

    // check content height
    if (main.outerHeight() < $(window).height()) {
        main.css('height', $(window).height());
        var vpad = main.height() - $(window).height();
        main.css('height', main.height() - vpad);
    }

    // open content
    if (main.css('left') != '0px' && main.css('left') != 'auto')
        main.animate({left: '0px'}).removeClass('content-close');
}

/***********************
 *  Ready Functions
 ***********************/
$(document).ready(function () {
    mobileWindow = $(window).width() < 768;

    /**
     * Toggle navbar for mobiles
     **/
    $('.navbar-toggle').on('click', function () {
        $('.wrap-nav').toggleClass('mobile-open', 700);
        var px = $('.wrap-nav').hasClass('mobile-open') ? '0' : '-100%';
        $('.wrap-nav').animate({left: px});

        return false;
    });
});


/***********************
 *  Load Functions
 ***********************/
$(window).load(function () {

    // check resize element status
    $(window).on('resize', function () {

        if ($(window).width() < 768) {

            // moving the order of the blog content
            if (!mobileWindow) {
                $('.wrap-nav').css({left: '-100%'});
                openContent($('.section.active .content'));
                mobileWindow = true;

                return;
            }
        } else { // if resize goes desktop -> reset status of content and nav

            if (mobileWindow) {
                $('.wrap-nav').css({left: '0'});
                $('.wrap-nav').removeClass('mobile-open');
                openContent($('.section.active .content'));
                mobileWindow = false;

                return;
            }
        }

    }).trigger('resize');

});

