<?php
/**
 * Template Name: Front Page
 */

get_header();


foreach ($clir_homepage_sections as $k=>$v) {
    get_template_part('home-sections/style-' . $home_style . '/section', $k);
}

get_footer();
