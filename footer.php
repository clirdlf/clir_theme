<!--Footer-->
<?php
 $display_footer_widgets    = alchem_option('display_footer_widgets');
 $footer_columns            = absint(alchem_option('footer_widget_columns'));
 $copyright_text            = alchem_option('copyright_text');
 $display_copyright_bar     = alchem_option('display_copyright_bar');
 $tooltip_position          = alchem_option('footer_social_tooltip_position');
 $footer_special_effects    = alchem_option('footer_special_effects');
 $footer_class =  $footer_special_effects == 'footer_sticky'? 'fxd-footer':'';

 ?>

 <footer class="<?php echo $footer_class; ?>">
        <?php if ($display_footer_widgets == 'yes'):?>
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                    <?php
                    for ($i = 1; $i <= $footer_columns; ++$i) {
                        ?>
                    <div class="col-md-<?php echo 12 / $footer_columns; ?>">
                    <?php
                            if (is_active_sidebar('footer_widget_'.$i)) {
                                dynamic_sidebar('footer_widget_'.$i);
                            } ?>
                    </div>

                    <?php
                    }?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="footer-info-area">
                <div class="container">
                 <?php //echo alchem_get_social('footer', 'footer-sns', $tooltip_position); ?>
                    <div class="clearfix"></div>
                    <?php
                     wp_nav_menu(array('theme_location' => 'footer_menu', 'depth' => 1, 'fallback_cb' => false, 'menu_class' => 'footer-links', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'));
                    ?>
                    <?php if ($display_copyright_bar == 'yes'):?>
                    <div class="site-info">
                        <p class="pull-right">
                            Unless otherwise indicated, content on this site is available for re-use under
                            <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode">CC BY-SA 4.0 License</a>
                        </p>
                        <p class="logo">
                            <a href="https://www.clir.org/">
                                <i class="icon-clir-logo-square clir-color"></i>
                                <span class="clir clir-font clir-color">CLIR</span>
                            </a>
                        </p>
                    <?php //echo do_shortcode($copyright_text); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
