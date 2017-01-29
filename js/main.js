/*
 * Created by jimsadler on 4/12/16.
 */
$(document).ready(function() {
    var scroll_start = 0;
    var startchange = $('.nav');
    var offset = startchange.offset();
    $(document).scroll(function () {
        scroll_start = $(this).scrollTop();
        if (scroll_start > offset.top) {
            $('#navbar-index').css('background-color', 'rgba(2, 23, 40, 0.8)');
        } else {
            $('#navbar-index').css('background-color', 'rgba(2, 23, 40, 0.8)')

        }
    });

    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });
});
$(document).ready(function() {
   // $('#contact .foot-contact li.col-lg-2').css({'padding-right':'0','padding-left':'0','width':'9.67%','font-size':'16px'});
    //$('p:contains(package of six)').css('margin-bottom','45px');

    $('.workshop-content form .buyNowButton').parent().css('margin-top','3em');


});



