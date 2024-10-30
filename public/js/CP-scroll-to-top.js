jQuery(document).ready(function($) { 
    //-------------------------------------------------------------------
    //--------------------Start Back to top button function--------------
    //-------------------------------------------------------------------
    var scrollSpeed = parseInt($('.scroll-to-top').attr("data-speed"));
    var offset      = $('.scroll-to-top').attr("data-offset");
    var $root       = $('html,body');

    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $(".scroll-to-top").fadeIn(300);
        } else {
            $(".scroll-to-top").fadeOut(300);
        }
    });
    $('.scroll-to-top').click(function(e) {
        e.preventDefault();
        $root.animate({
            scrollTop : 0
        },scrollSpeed);
    });
    //------------------------------------------------------------------
    //------------------End Back to top button function-----------------
    //------------------------------------------------------------------
});
