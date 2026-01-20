<?php
function baltic_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'baltic_theme_setup');


/**
 * Load theme CSS + Tailwind CDN
 */
function baltic_theme_assets() {

  // Tailwind CDN (quick start)
  wp_enqueue_script(
    'tailwind-cdn',
    'https://cdn.tailwindcss.com',
    array(),
    null,
    false
  );

  // Theme stylesheet (style.css)
  wp_enqueue_style(
    'baltic-theme-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_stylesheet_directory() . '/style.css')
  );
}
add_action('wp_enqueue_scripts', 'baltic_theme_assets');