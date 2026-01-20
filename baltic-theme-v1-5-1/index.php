<?php
/* Fallback index template */
get_header();
?>

<div class="max-w-6xl mx-auto px-4 py-10 md:py-16">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('mb-10'); ?>>
        <h1 class="text-2xl font-semibold mb-2"><?php the_title(); ?></h1>
        <div class="prose prose-invert max-w-none">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
