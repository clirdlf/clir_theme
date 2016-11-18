//= include ../node_modules/jquery-smooth-scroll/jquery.smooth-scroll.js

(function($){
  'use scrict';

  $(document).ready(function(){
    var offset = 200; // pixel offset for header
    var duration = 500; // animation duration in ms

    $('body').append('<a class="scrollToTop" href="#"></a>');

    $('a').smoothScroll({ offset: -75 });

    $(window).scroll(function(){
        if($(this).scrollTop() > offset) {
          $('.scrollToTop').css('opacity', 1);
          $('.scroll-to-top').fadeIn(duration);
        } else {
          $('.scroll-to-top').fadeOut(duration);
        }
    });

    $('.scroll-to-top').click(function(){
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    });
  });
})(jQuery);
