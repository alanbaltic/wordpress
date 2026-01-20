<?php
function baltic_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'baltic_theme_setup');

function baltic_enqueue_assets() {
  wp_enqueue_style(
    'baltic-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  // Motion layer (v1.5) — keeps the site feeling alive, especially on scroll up/down.
  $css = get_stylesheet_directory() . '/assets/be-motion.css';
  $js  = get_stylesheet_directory() . '/assets/be-motion.js';

  if (file_exists($css)) {
    wp_enqueue_style(
      'baltic-motion',
      get_stylesheet_directory_uri() . '/assets/be-motion.css',
      ['baltic-style'],
      filemtime($css)
    );
  }

  if (file_exists($js)) {
    wp_enqueue_script(
      'baltic-motion',
      get_stylesheet_directory_uri() . '/assets/be-motion.js',
      [],
      filemtime($js),
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'baltic_enqueue_assets');
// ========= Shared helpers =========
if (!function_exists('baltic_youtube_embed_src')) {
  /**
   * Returns a privacy-friendly YouTube embed URL (youtube-nocookie).
   * Accepts a raw video ID or a full YouTube URL.
   */
  function baltic_youtube_embed_src($video){
    $video = trim((string)$video);
    if (!$video) return '';

    // If a full URL is provided, try to extract the ID.
    if (preg_match('~^https?://~i', $video)) {
      $parts = wp_parse_url($video);
      if (!empty($parts['query'])) {
        parse_str($parts['query'], $q);
        if (!empty($q['v'])) $video = $q['v'];
      }
      // youtu.be/ID
      if (isset($parts['host']) && strpos($parts['host'], 'youtu.be') !== false && !empty($parts['path'])) {
        $video = trim($parts['path'], '/');
      }
    }

    // Basic sanity check
    $video = preg_replace('~[^A-Za-z0-9_-]~', '', $video);
    if (strlen($video) < 6) return '';

    return 'https://www.youtube-nocookie.com/embed/' . $video . '?rel=0&modestbranding=1';
  }
}
