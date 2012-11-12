(function ($) {
    function printWidthHeight() {
        var the_width = $(window).width();
        $('#width').text(the_width);
        var the_height = $(window).height();
        $('#height').text(the_height);
    }

    $(document).ready(function() {
        printWidthHeight();
    });
    $(window).resize(function() {
        printWidthHeight();
    });
})(jQuery);