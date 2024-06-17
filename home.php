<?php
/**
 * Welcome to the homepage
 */

get_header(); ?>

<!-- hero -->
<?php get_template_part( 'partials/hero/hero-home'); ?>
<!-- callout-text-right -->
<?php get_template_part( 'partials/content/callout-text', 'right', array(
  'background-type' => 'none',
  'eyebrow' => __("Eyebrow"), 
  'header' => __("Generating relevant & engaging content"),
  'description' => __("Non diam phasellus vestibulum lorem sed. Massa enim nec dui nunc mattis enim. Quisque egestas diam in arcu cursus euismod quis viverra. Eget arcu dictum varius duis at consectetur lorem donec massa."),
  'image' => get_template_directory_uri() . '/assets/images/Device_Mobile.png',
  'classes' => array("image-style-overflow"),
)); ?>

<!-- callout-text-center-->
<?php get_template_part( 'partials/content/callout-text', 'center', array(
  'background-type' => 'image',
  'background-image' => get_template_directory_uri() . '/assets/images/Phone.jpg',
  'eyebrow' => __("Eyebrow"), 
  'header' => __("Integrated tech"),
  'description' => __("Create custom solutions with the aim to improve overall outcomes."),
  'cta-main-title' => __("Contact Us"),
  'cta-main-url' => esc_url("/contact"),
  'classes' => array("dark"),
)); ?>
<?php

get_footer();
