<?php
/* Default page template */
get_header();
?>

<main class="bg-slate-950 text-slate-100 min-h-screen">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-16">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>
