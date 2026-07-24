<?php
/**
 * THEDREAMERS — Generic Page Template
 *
 * @package TheDreamers
 */
get_header(); ?>

<!-- Page Hero -->
<section class="td-page-hero">
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'thedreamers-hero', array( 'aria-hidden' => 'true' ) ); ?>
    <div class="td-page-hero-overlay"></div>
  <?php endif; ?>
  <div class="td-container">
    <div class="td-page-hero-content">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</section>

<section class="td-section td-bg-white">
  <div class="td-container td-container-md">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <div class="td-single-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer();
