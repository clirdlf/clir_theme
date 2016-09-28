<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clir
 */

$facebook  = esc_url(get_theme_mod( 'facebook_textbox' ));
$twitter   = esc_url(get_theme_mod( 'twitter_textbox' ));
$tumblr    = esc_url(get_theme_mod( 'tumblr_textbox' ));
$linkedin  = esc_url(get_theme_mod( 'linkedin_textbox' ));
$youtube   = esc_url(get_theme_mod( 'youtube_textbox' ));
$github    = esc_url(get_theme_mod( 'github_textbox' ));
?>

	</div><!-- #content -->

<div class="scroll-top-wrapper">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-angle-up"></i>
  </span>
</div>

<div class="container footers">
  <div class="row">
      <div class="col-md-3 col-sm-6">
        <h3 class="widget-title">Contact</h3>

        <!-- TODO: get contact email in admin customizer -->
        <address>
           CLIR+DLF<br>
           1707 L St. NW<br>
           Suite 650<br>
           Washington, DC 20036<br>
           <abbr title="Phone">P:</abbr> (202) 939-4750 <br>
           <abbr title="Email">E:</abbr> TODO - get admin social option
        </address>
      </div>

      <div class="col-md-3 col-sm-6">
        <h3 class="widget-title">Elsewhere</h3>
        <ul class="social list-unstyled">
        <?php if( $twitter ): ?>
          <li><a href="https://twitter.com/<?php echo $twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i> <?php echo $twitter; ?></a></li>
        <?php endif; ?>
        <?php if( $facebook ): ?>
          <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
        <?php endif; ?>
        <?php if( $linkedin ): ?>
          <li><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
        <?php endif; ?>
        <?php if( $tumblr ): ?>
          <li><a href="<?php echo $tumblr;?>"><i class="fa fa-tumblr" aria-hidden="true"></i> Tumblr</a></li>
        <?php endif; ?>
        <?php if( $youtube ): ?>
          <li><a href="<?php echo $youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a></li>
        <?php endif; ?>
        <?php if( $github ): ?>
          <li><a href="<?php echo $github;?>"><i class="fa fa-github" aria-hidden="true"></i> Github</a></li>
        <?php endif; ?>
        </ul>
      </div>

      <div class="col-md-3 col-sm-6">
        <h3>Upcoming Events</h3>
        <div id="calendar"></div>
      </div>

     <?php dynamic_sidebar( 'footer-about' ); ?>
  </div>
</div>


<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
    <div class="col-md-12">
      <div class="pull-right">
        <!-- i18n escape string -->
        All content on this site is available for re-use under <a href="<?php echo esc_url( __('https://creativecommons.org/licenses/by-sa/4.0/legalcode', 'clir')); ?>">CC BY-SA 4.0 License</a>
      </div>
      <div class="logo">
        <a href="<?php echo esc_url( __( 'https://www.clir.org/', 'clir' ) ); ?>">
          CLIR</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
