<?php
/* enqueue script for parent theme stylesheeet */
function childtheme_enqueue_scripts()
{
  wp_enqueue_style('parent', get_template_directory_uri() . '/style.css', array('oops-slick', 'oops-slick-theme', 'oops-lightbox'));
  wp_enqueue_style('child', get_template_directory_uri() . '/style.css', array('parent'));
}
add_action('wp_enqueue_scripts', 'childtheme_enqueue_scripts');
