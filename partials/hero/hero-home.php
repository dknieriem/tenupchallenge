<?php get_template_part( 'partials/content/callout-text', 'left', array(
  'background-type' => 'gradient',
  'background-color-0' => 'gradient-start',
  'background-color-1' => 'gradient-end',
  'eyebrow' => __("Who we are"), 
  'header' => __("Engage brand and increase viewability"),
  'description' => __("Elementum sagittis vitae et leo duis ut. Eu feugiat pretium nibh ipsum consequiat."),
  'cta-main-title' => __("Download Now"),
  'cta-main-url' => esc_url("/download"),
  'cta-secondary-title' => __("Learn More"),
  'cta-secondary-url' => esc_url("/more"),
  'image' => get_template_directory_uri() . '/assets/images/Device_Ipad.png',
  'image-style' => "background",
  'classes' => array("hero-home","dark")
)); ?>