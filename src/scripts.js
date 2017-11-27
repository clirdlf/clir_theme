//= include ../node_modules/jquery-smooth-scroll/jquery.smooth-scroll.js

(function($){
  'use scrict';

  $(document).ready(function(){
    var offset   = 125; // pixel offset for header
    var duration = 500; // animation duration in ms

    // $('body').append('<a class="scrollToTop" href="#top"></a>');

    $('a').smoothScroll({ offset: offset });

    $(window).scroll(function(){
        if($(this).scrollTop() > offset) {
          $('.scrollToTop').css('opacity', 1);
          $('.scrollToTop').fadeIn(duration);
        } else {
          $('.scrollToTop').fadeOut(duration);
        }
    });

    $('.scrollToTop').click(function(){
        event.preventDefault();
        $('html,body').animate({ scrollTop: offset }, duration);
        return false;
    });

    var rss = $('a[href$="http://rss"]').prop('href', '/feed');
  });

})(jQuery);
