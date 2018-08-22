//= include ../node_modules/jquery-smooth-scroll/jquery.smooth-scroll.js

(function($){
  'use scrict';

  $(document).ready(function(){
    var menu_offset = 30; // pixel offset for header
    var duration    = 400; // animation duration in ms

    // $('body').append('<a class="scrollToTop" href="#top"></a>');

    $('a').smoothScroll(
      {
        offset: menu_offset,
        easing: 'linear',
        speed: duration
      }
    );

    $(window).scroll(function(){
      if($(this).scrollTop() > menu_offset) {
        $('.scrollToTop').css('opacity', 1);
        $('.scrollToTop').fadeIn(duration);
      } else {
        $('.scrollToTop').fadeOut(duration);
      }
    });

    $('.scrollToTop').click(function(){
      event.preventDefault();
      $('html,body').animate({ scrollTop: menu_offset }, duration);
      return false;
    });

    // Couldn't edit a link, so we're doing this until wel can get it fixed
    $('a[href$="http://rss"]').prop('href', '/feed');
  });

})(jQuery);
