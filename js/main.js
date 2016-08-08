/*
 * Created by jimsadler on 4/12/16.
 */
$(document).ready(function() {
    var scroll_start = 0;
    var startchange = $('.nav');
    var offset = startchange.offset();
    $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top) {
            $('.navbar').css('background-color', '#333333');
        }else {
            $('.navbar').css('background-color', 'transparent')

        }
    });
});


$( document ).ready(function() {
    $('#logo').hide().one("load",function(){
        $(this).fadeIn(2000);
    }).each(function(){
        if(this.complete) $(this).trigger("load");
    });
    $('.fade').addClass('fade-in');
});
