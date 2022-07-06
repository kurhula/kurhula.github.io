/***********************
 *  Load Functions
 ***********************/
$(window).load(function () {

    // check resize element status
    $(window).on('resize', function () {

        var pos = $(window).width() < 768 ? 'bottom' : 'side';

        if (pos == "side") {
            $('.fixed_width').insertBefore('.dynamic_width');
            var sidebarHeight = $('.dynamic_width').outerHeight() > $(window).height() ? $('.dynamic_width').outerHeight() : $(window).height();

            $('#sidebar').css("height", sidebarHeight);
        } else if (pos == "bottom") {
            $('.dynamic_width').insertBefore('.fixed_width');
            $('#sidebar').css("height", "auto");
        }

    }).trigger('resize');
});

