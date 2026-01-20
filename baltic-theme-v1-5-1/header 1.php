<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php wp_head(); ?>

  <!-- Tailwind CDN for quick start -->
  <script src="https://cdn.tailwindcss.com"></script>

 
</head>

<body <?php body_class('bg-slate-950 text-slate-100'); ?>>
<div class="min-h-screen flex flex-col bg-slate-950 text-slate-100">

  <!-- Header -->
  <header class="border-b border-slate-800 bg-slate-950/90 backdrop-blur sticky top-0 z-20">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between gap-4">
      <div class="flex items-center gap-2">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2">
          <img
            src="https://1xu.5eb.myftpupload.com/wp-content/uploads/2025/12/Baltic-electric-4-white.png"
            alt="Baltic Electric Ltd"
            class="be-logo h-11 md:h-12 w-auto"
          />
        </a>
      </div>

      <nav class="hidden md:flex items-center gap-6 text-sm text-slate-300">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="hover:text-emerald-400"><?php echo esc_html__('Home', 'baltic-theme'); ?></a>
        <a href="<?php echo esc_url( home_url('/solar-battery/') ); ?>" class="hover:text-emerald-400"><?php echo esc_html__('Solar &amp; Battery', 'baltic-theme'); ?></a>
        <a href="<?php echo esc_url( home_url('/ev-chargers/') ); ?>" class="hover:text-emerald-400"><?php echo esc_html__('EV Chargers', 'baltic-theme'); ?></a>
        <a href="<?php echo esc_url( home_url('/eicrs-boards/') ); ?>" class="hover:text-emerald-400"><?php echo esc_html__('EICRs &amp; Boards', 'baltic-theme'); ?></a>
        <a href="<?php echo esc_url( home_url('/servicing-maintenance/') ); ?>" class="hover:text-emerald-400"><?php echo esc_html__('Servicing &amp; Maintenance', 'baltic-theme'); ?></a>
      </nav>

      <a
        href="#contact"
        class="text-xs sm:text-sm inline-flex items-center rounded-full bg-emerald-400 px-4 py-2 font-semibold text-slate-950 hover:bg-emerald-300 transition"
      >
        <?php echo esc_html__('Get a quote', 'baltic-theme'); ?>
      </a>
    </div>
  </header>

  <!-- Mobile nav -->
  <div class="md:hidden border-b border-slate-800 bg-slate-950/90">
    <div class="max-w-6xl mx-auto px-4 py-2 flex flex-wrap gap-3 text-xs text-slate-300">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="rounded-full border px-3 py-1 border-slate-700">Home</a>
      <a href="<?php echo esc_url( home_url('/solar-battery/') ); ?>" class="rounded-full border px-3 py-1 border-slate-700">Solar</a>
      <a href="<?php echo esc_url( home_url('/ev-chargers/') ); ?>" class="rounded-full border px-3 py-1 border-slate-700">EV</a>
      <a href="<?php echo esc_url( home_url('/eicrs-boards/') ); ?>" class="rounded-full border px-3 py-1 border-slate-700">EICRs</a>
      <a href="<?php echo esc_url( home_url('/servicing-maintenance/') ); ?>" class="rounded-full border px-3 py-1 border-slate-700">Servicing &amp; Maintenance</a>
    </div>
  </div>

  <main class="flex-1">