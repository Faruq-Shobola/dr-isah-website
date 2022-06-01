<?php
/**
 * The template for displaying blog pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dr-isah
 */

get_header();
?>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
    
    <?php if(have_posts() ) : while (have_posts() ) :the_post(); ?>
      <?php get_template_part( 'template-parts/content/content', 'blog' ); ?>
    <?php endwhile; else: endif; ?>

  </div>
</div>

<?php
get_sidebar();
get_footer();
