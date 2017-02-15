//= include ../node_modules/jquery-smooth-scroll/jquery.smooth-scroll.js

(function($){
  'use scrict';

  $(document).ready(function(){
    var offset = 200; // pixel offset for header
    var duration = 500; // animation duration in ms

    $('body').append('<a class="scrollToTop" href="#top"></a>');

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
        $('html, body').animate({ scrollTop: duration }, duration);
        return false;
    });

    /* Simple spam protection for email addresses using jQuery.
     * Well, the protection isn’t jQuery-based, but you get the idea.
     * This snippet allows you to slightly ‘obfuscate’ email addresses to make it harder for spambots to harvest them, while still offering a readable address to your visitors.
     * E.g.
     * <a href="mailto:foo(at)example(dot)com">foo at example dot com</a>
     * →
     * <a href="mailto:foo@example.com">foo@example.com</a>
     */
    $('a[href^="mailto:"]').each(function() {
      this.href = this.href.replace('(at)', '@').replace(/\(dot\)/g, '.');
      this.innerHTML = this.href.replace('mailto:', '');
    });


  });

})(jQuery);
