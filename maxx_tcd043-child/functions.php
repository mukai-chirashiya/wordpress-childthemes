<?php
/* enqueue script for parent theme stylesheeet */
function enqueue_child_styles()
{
  // enqueue style
  wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_child_styles');
