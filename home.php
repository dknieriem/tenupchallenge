<?php
/**
 * Welcome to the homepage
 */

get_header(); ?>

<!-- hero -->
<?php get_template_part( 'partials/hero/hero-home'); ?>
<!-- callout-text-right -->
<?php get_template_part( 'partials/content/callout-text-right', null, array(
  'background-type' => 'none',
  'eyebrow' => __("Eyebrow"), 
  'header' => __("Generating relevant & engaging content"),
  'description' => __("Non diam phasellus vestibulum lorem sed. Massa enim nec dui nunc mattis enim. Quisque egestas diam in arcu cursus euismod quis viverra. Eget arcu dictum varius duis at consectetur lorem donec massa."),
  'image' => get_template_directory_uri() . '/assets/images/Device_Mobile.png'
)); ?>

<!-- callout-text-center-->
<?php get_template_part( 'partials/content/callout-text-center', null, array(
  'background-type' => 'none',
  'eyebrow' => __("Eyebrow"), 
  'header' => __("Engage brand and increase viewability"),
  'description' => __("Elementum sagittis vitae et leo duis ut. Eu feugiat pretium nibh ipsum consequiat."),
  'cta-main-title' => __("Download Now"),
  'cta-main-url' => esc_url("/download"),
  'image' => get_template_directory_uri() . '/assets/images/Phone.jpg'
)); ?>
<?php

get_footer();
