jQuery(document).on('ready', function ($) {
    "use strict";
/*----------------------------
        SCROLL TO TOP
    ------------------------------*/
$('.scrolltotop').each(function(){
    $(this).click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 
    });
});
    
/*----------------------------
        LOADING
    ------------------------------*/
$(window).load(function () {
    $(".loader").fadeOut("slow");
});
}(jQuery));