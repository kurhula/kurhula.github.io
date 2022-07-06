/***********************
 *  Ready Functions
 ***********************/
$(document).ready(function () {
    // hide contents
    $('.section .content').each(function () {
        closeContent($(this));
    });

    // add hash to avoud bug in safari
    if (location.hash == '')
        location.hash = $('#menu li:first-child').attr('data-menuanchor');

    /**
     * Init fullPage
     **/
    $('#fullpage').fullpage({
        anchors: ['home', 'about', 'innovation', 'development', 'enterprise', 'authorship', 'contact'],
        menu: '#menu',
        scrollOverflow: true,
        afterLoad: function (anchorLink, index, slideIndex, direction) {
            var main = $('.section:eq(' + (index - 1) + ') .content');

            // open content
            openContent(main);

            // if mobile navbar is show -> hide
            if ($('.wrap-nav').hasClass('mobile-open')) {
                $('.wrap-nav').toggleClass('mobile-open');
                var px = $('.wrap-nav').hasClass('mobile-open') ? '0' : '-100%';
                $('.wrap-nav').animate({left: px});
            }
        },
        onLeave: function (index, nextIndex, direction) {
            var main = $('.section:eq(' + (index - 1) + ') .content');

            // close content
            closeContent(main);
        }
    });

    /**
     * Toggle content
     **/
    $('.btn-toggle a').on('click', function () {
        var main = $(this).parents('.content');
        var ID = main.attr('id');

        if (main.css('left') == '0px')
            closeContent(main);
        else
            openContent(main);

        return false;
    });

});


/***********************
 *  Load Functions
 ***********************/
$(window).load(function () {

    $(window).on('resize', function () {
        // keep content hidden while resizing
        var main = $('.section.active .content');
        if (main.css('left') != '0px' && main.hasClass('content-close')) {
            var contentWidth = main.outerWidth();
            main.css({left: '-' + contentWidth + 'px'});
        }
    });

});

