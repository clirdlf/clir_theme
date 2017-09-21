<?php
global $alchem_page_meta;
$detect = new Mobile_Detect();
$display_top_bar = alchem_option('display_top_bar');
$header_background_parallax = alchem_option('header_background_parallax');
$header_top_padding = alchem_option('header_top_padding', '');
$header_bottom_padding = alchem_option('header_bottom_padding', '');
$header_background_parallax = $header_background_parallax == 'yes' ? 'parallax-scrolling' : '';
$top_bar_left_content = alchem_option('top_bar_left_content');
$top_bar_right_content = alchem_option('top_bar_right_content');
$header_fullwidth = alchem_option('header_fullwidth');

$header_overlay = alchem_option('header_overlay');
$overlay = '';
if ($header_overlay == 'yes' && is_front_page()) {
  $overlay = 'overlay';
}

$header_container = 'container';
if ($header_fullwidth == 1) {
  $header_container = 'container-fluid';
}

//sticky
$enable_sticky_header = alchem_option('enable_sticky_header');
$enable_sticky_header_tablets = alchem_option('enable_sticky_header_tablets');
$enable_sticky_header_mobiles = alchem_option('enable_sticky_header_mobiles');
$logo_position = alchem_option('logo_position', 'left');

if (isset($alchem_page_meta['nav_menu']) && $alchem_page_meta['nav_menu'] != '') {
  $theme_location = $alchem_page_meta['nav_menu'];
} else {
  $theme_location = 'primary';
}

$header_position = isset($alchem_page_meta['header_position']) ? $alchem_page_meta['header_position'] : 'top';
switch ($header_position) {
case 'top':
  break;
case 'left':
  $body_class .= ' side-header';
  $wrapper = '';
  $logo_position = 'center';
  $overlay = '';
  break;
case 'right':
  $body_class .= ' side-header side-header-right';
  $wrapper = '';
  $logo_position = 'center';
  $overlay = '';
  break;
}
?>
<header class="header-style-1 header-wrap <?php echo $overlay; ?> logo-<?php echo $logo_position; ?>">

<?php if ($display_top_bar == 'yes'):?>
<?php // TODO: refactor as a template partial?>
<div class="top-bar">
  <div class="<?php echo $header_container; ?>">
      <div class="top-bar-left">
        <nav class="top-bar-menu clir-custom-menu">
          <ul class="list-inline">
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
              <a href="https://staging.clir.org">
                <!-- <i class="icon-clir-logo-square anchor-color bigger"></i> -->
                <span class="clir-font">CLIR</span>
              </a>
            </li>
              <li class="hidden-xs menu-item menu-item-type-custom menu-item-object-custom">
                <a href="https://staging.clir.org/fellowships"><span>Fellowships &amp; Grants</span></a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="https://staging.diglib.org/"><span>DLF</span></a>
              </li>
              <li class="hidden-xs menu-item menu-item-type-custom menu-item-object-custom">
                <a href="https://staging.clir.org/pubs"><span>Publications</span></a>
              </li>
              <li class="hidden-xs menu-item menu-item-type-custom menu-item-object-custom">
                <a href="https://staging.clir.org/join">Join</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                 <a class="give" href="https://staging.diglib.org/give">Give
                    <i class="fa fa-heart"></i>
                </a>
              </li>
            </ul>
          </nav>
<?php // alchem_get_topbar_content( $top_bar_left_content );?>
      </div>
      <div class="top-bar-right">
        <ul class="list-inline hidden-xs">
          <li class="dropdown high-z">
            <a href="#" class="dropdown-tottle" data-toggle="dropdown">
              <i class="icon-clir-logo header-logo-size bigger"></i>
              CLIR Programs
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right clir-programs-menu" aria-labelled-by="clir-programs" role="menu">
                <li><a href="https://www.diglib.org/">Digital Library Federation</a></li>
                <li><a href="https://www.diglib.org/forum/">DLF Forum</a></li>
                <li><a href="http://dlme.clir.org">Digital Library of the Middle East</a></li>
                <li><a href="https://www.clir.org/fellowships/hiddencollections">Digitizing Hidden Special Collections and Archives</a></li>
                <li><a href="https://www.clir.org/recordings-at-risk">Recordings at Risk</a></li>
                <li><a href="https://www.clir.org/fellowships/mellon">Mellon Fellowships for Dissertation Research</a></li>
                <li><a href="http://www.leadingchangeinstitute.org">Leading Change Institute</a></li>
                <li><a href="https://www.diglib.org/groups/e-research-network/">DLF eResearch Network</a></li>
                <li><a href="https://www.clir.org/fellowships/postdoc">Postdoctoral Fellowship Program</a></li>
              </ul>
            </li>
          </ul>
  <?php //alchem_get_topbar_content( $top_bar_right_content );?>
      </div>
  </div>
  <div class="clear"></div>
</div><!-- .top_bar -->
  <?php endif; ?>

<?php
$logo = alchem_option('default_logo', '');
$logo_retina = alchem_option('default_logo_retina');
$logo = ($logo == '') ? $logo_retina : $logo;

$sticky_logo = alchem_option('sticky_logo', '');
$sticky_logo_retina = alchem_option('sticky_logo_retina');
$sticky_logo = ($sticky_logo == '') ? $sticky_logo_retina : $sticky_logo;

?>

            <div class="main-header <?php echo $header_background_parallax; ?>">
                <div class="<?php echo $header_container; ?>">
                    <div class="logo-box">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if ($logo):?>
                        <img class="site-logo normal_logo" alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($logo); ?>" />
                     <?php endif; ?>
<?php
if ($logo_retina):
  $pixels = '';
if (is_numeric(alchem_option('retina_logo_width')) && is_numeric(alchem_option('retina_logo_height'))):
  $pixels = 'px';
endif; ?>
          <img src="<?php echo esc_url($logo_retina); ?>" alt="<?php bloginfo('name'); ?>" class="site-logo retina_logo" />
          <?php endif; ?>
                     </a>
                        <div class="name-box">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-name"><?php bloginfo('name'); ?></h1></a>
                            <span class="site-tagline"><?php bloginfo('description'); ?></span>
                        </div>
                    </div>
                    <button class="site-nav-toggle">
                        <span class="sr-only"><?php _e('Toggle navigation', 'alchem'); ?></span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <nav class="site-nav" role="navigation">
<?php
wp_nav_menu(array('theme_location' => $theme_location, 'depth' => 0, 'fallback_cb' => false, 'container' => '', 'container_class' => 'main-menu', 'menu_id' => 'menu-main', 'menu_class' => 'main-nav', 'link_before' => '<span class="menu-item-label">', 'link_after' => '</span>', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'walker' => new MageeMenuWalker()));
?>
                    </nav>
                </div>
            </div>
            <?php if ($enable_sticky_header == 'yes' && $header_position != 'left' && $header_position != 'right'):?>
            <?php if (!$detect->isTablet() || ($detect->isTablet() && $enable_sticky_header_tablets == 'yes') || ($detect->isMobile() && !$detect->isTablet() && $enable_sticky_header_mobiles == 'yes')):?>
           <!-- sticky header -->
           <div class="fxd-header logo-<?php echo $logo_position; ?>">
                <div class="<?php echo $header_container; ?>">
                    <div class="logo-box text-left">
                        <a href="<?php echo esc_url(home_url('/')); ?>">

                    <?php if ($sticky_logo):?>
                        <img class="site-logo normal_logo" alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($sticky_logo); ?>" />
                     <?php endif; ?>

<?php
if ($sticky_logo_retina):
  $pixels = '';
if (is_numeric(alchem_option('sticky_logo_width_for_retina_logo')) && is_numeric(alchem_option('sticky_logo_height_for_retina_logo'))):
  $pixels = 'px';
endif; ?>
          <img src="<?php echo $sticky_logo_retina; ?>" alt="<?php bloginfo('name'); ?>" class="site-logo retina_logo" />
          <?php endif; ?>
                     </a>
                        <div class="name-box">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-name"><?php bloginfo('name'); ?></h1></a>
                            <span class="site-tagline"><?php bloginfo('description'); ?></span>
                        </div>
                    </div>
                    <button class="site-nav-toggle">
                        <span class="sr-only"><?php _e('Toggle navigation', 'alchem'); ?></span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <nav class="site-nav" role="navigation">
<?php
wp_nav_menu(array('theme_location' => $theme_location, 'depth' => 0, 'fallback_cb' => false, 'container' => '', 'container_class' => 'main-menu', 'menu_id' => 'menu-main', 'menu_class' => 'main-nav', 'link_before' => '<span class="menu-item-label">', 'link_after' => '</span>', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'walker' => new MageeMenuWalker()));
?>
                    </nav>
                </div>
            </div>
            <?php endif; ?>
             <?php endif; ?>
<script>
jQuery('li.menu_column_2 > ul > li').addClass('col-md-6');
jQuery('li.menu_column_3 > ul > li').addClass('col-md-4');
jQuery('li.menu_column_4 > ul > li').addClass('col-md-3');
jQuery('li.menu_column_5 > ul > li').addClass('col-md-1_5');
jQuery('li.menu_column_6 > ul > li').addClass('col-md-2');
</script>

            <div class="clear"></div>
        </header>
