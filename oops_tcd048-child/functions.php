<?php
/* enqueue script for parent theme stylesheeet */
function childtheme_read_styles()
{

  // enqueue style
  if (is_front_page()) {
    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css', array('oops-slick', 'oops-slick-theme', 'oops-lightbox'));
  } else {
    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css', array());
  }
  wp_enqueue_style('child', get_stylesheet_directory_uri() . '/style.css', array('parent'));
}
add_action('wp_enqueue_scripts', 'childtheme_read_styles');
