<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#17233d">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body <?php body_class('bts-wordpress-site'); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>
<div class="bts-frame min-h-screen flex flex-col">
  <div class="topline">
    <div class="container topline-inner">
      <span>Registered electrical contractor <strong>• NAPIT member 70877</strong></span>
      <span>Baltic Electric Ltd trading as Baltic Technical Services</span>
    </div>
  </div>
  <header id="main-header" class="site-header">
    <div class="container header-inner">
      <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="BTS Baltic Technical Services homepage">
        <img class="brand-mark be-logo" src="<?php echo esc_url(get_theme_file_uri('/assets/bts-mark.svg')); ?>" width="110" height="36" alt="BTS logo">
        <span class="brand-wording"><strong>Baltic Technical<br>Services</strong><small>Electrical • Renewables • Compliance</small></span>
      </a>
      <nav class="desktop-nav" aria-label="Main navigation">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a href="<?php echo esc_url(home_url('/solar-battery/')); ?>">Solar &amp; Battery</a>
        <a href="<?php echo esc_url(home_url('/ev-chargers/')); ?>">EV Charging</a>
        <a href="<?php echo esc_url(home_url('/eicrs-boards/')); ?>">EICRs</a>
        <a href="<?php echo esc_url(home_url('/servicing-maintenance/')); ?>">Maintenance</a>
      </nav>
      <a href="#" data-baltic-quote="open" data-bqd-open="1" class="bqd-trigger btn btn-navy header-cta">Get a quote <span aria-hidden="true">↗</span></a>
      <button id="mobileMenuToggle" class="mobile-toggle" type="button" aria-label="Open navigation" aria-controls="mobileNav" aria-expanded="false"><span aria-hidden="true">☰</span></button>
    </div>
    <nav id="mobileNav" class="mobile-nav" aria-label="Mobile navigation">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/solar-battery/')); ?>">Solar &amp; Battery</a>
      <a href="<?php echo esc_url(home_url('/ev-chargers/')); ?>">EV Charging</a>
      <a href="<?php echo esc_url(home_url('/eicrs-boards/')); ?>">EICRs &amp; Boards</a>
      <a href="<?php echo esc_url(home_url('/servicing-maintenance/')); ?>">Maintenance</a>
      <a href="#" data-baltic-quote="open" data-bqd-open="1" class="bqd-trigger">Get a quote</a>
    </nav>
  </header>
  <main class="flex-1" id="main">
