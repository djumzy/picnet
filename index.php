<?php
/**
 * THEDREAMERS — Main Index (fallback)
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-section td-bg-light">
  <div class="td-container">
    <?php if ( have_posts() ) : ?>
      <?php td_section_heading( __( 'Latest', 'thedreamers' ), __( 'All Posts', 'thedreamers' ), '', true ); ?>
      <div class="td-grid-3">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="td-post-card">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thedreamers-card' ); ?></a>
            <?php endif; ?>
            <div class="td-post-card-body">
              <div class="td-post-card-meta">
                <span class="td-post-card-cat"><?php the_category( ', ' ); ?></span>
                <span><?php echo esc_html( get_the_date() ); ?></span>
              </div>
              <h3 class="td-post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="td-post-card-excerpt"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="td-btn td-btn-primary" style="margin-top:.75rem;">
                <?php esc_html_e( 'Read More', 'thedreamers' ); ?>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="td-pagination">
        <?php echo paginate_links( array( 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) ); // phpcs:ignore ?>
      </div>
    <?php else : ?>
      <p><?php esc_html_e( 'No posts found.', 'thedreamers' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();
