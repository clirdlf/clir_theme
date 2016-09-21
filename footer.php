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

?>

	</div><!-- #content -->

<div class="scroll-top-wrapper">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-angle-up"></i>
  </span>
</div>

<div class="container footers">
  <div class="row">
     <?php dynamic_sidebar( 'footer-1' ); ?>
     <?php dynamic_sidebar( 'footer-2' ); ?>
     <?php dynamic_sidebar( 'footer-3' ); ?>
     <?php dynamic_sidebar( 'footer-4' ); ?>
  </div>
</div>


<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
    <div class="col-md-12">
      <div class="pull-right">
        <!-- i18n escape string -->
        All content on this site is available for re-user under <a href="<?php echo esc_url( __('https://creativecommons.org/licenses/by-sa/4.0/legalcode', 'clir')); ?>">CC BY-SA 4.0 License</a>
      </div>
      <div class="logo">
        <a href="<?php echo esc_url( __( 'https://www.clir.org/', 'clir' ) ); ?>">
          CLIR</a>
      </div>
    </div>
  </div>
</footer>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clir' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'clir' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'clir' ), 'clir', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
