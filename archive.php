<?php
/**
 * THEDREAMERS — Archive / Blog
 *
 * @package TheDreamers
 */
get_header(); ?>

<!-- Hero -->
<section class="td-page-hero" style="min-height:300px;">
  <div class="td-page-hero-overlay" style="background:var(--td-primary);position:absolute;inset:0;opacity:.97;"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <?php if ( is_category() ) : ?>
        <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Category', 'thedreamers' ); ?></span>
        <h1><?php single_cat_title(); ?></h1>
        <?php the_archive_description( '<p>', '</p>' ); ?>
      <?php elseif ( is_tag() ) : ?>
        <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Tag', 'thedreamers' ); ?></span>
        <h1><?php single_tag_title(); ?></h1>
      <?php elseif ( is_author() ) : ?>
        <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Author', 'thedreamers' ); ?></span>
        <h1><?php the_author(); ?></h1>
      <?php elseif ( is_year() || is_month() || is_day() ) : ?>
        <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Archives', 'thedreamers' ); ?></span>
        <h1><?php the_archive_title(); ?></h1>
      <?php else : ?>
        <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Stories of Change', 'thedreamers' ); ?></span>
        <h1><?php esc_html_e( 'Blog & Stories', 'thedreamers' ); ?></h1>
        <p><?php esc_html_e( 'Impact stories, program updates, and news from Rwamwanja.', 'thedreamers' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="td-section td-bg-light">
  <div class="td-container">
    <div class="td-sidebar-wrap">

      <div>
        <?php if ( have_posts() ) : ?>
          <div class="td-grid-2" style="gap:1.5rem;">
            <?php while ( have_posts() ) : the_post(); ?>
              <article class="td-post-card">
                <?php if ( has_post_thumbnail() ) : ?>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thedreamers-card' ); ?></a>
                <?php else : ?>
                  <div style="height:180px;background:var(--td-primary);display:flex;align-items:center;justify-content:center;">
                    <span style="color:rgba(255,255,255,.4);font-size:.85rem;font-weight:700;">PICKNET</span>
                  </div>
                <?php endif; ?>
                <div class="td-post-card-body">
                  <div class="td-post-card-meta">
                    <span class="td-post-card-cat"><?php the_category( ', ' ); ?></span>
                    <span><?php echo esc_html( get_the_date() ); ?></span>
                  </div>
                  <h3 class="td-post-card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <p class="td-post-card-excerpt"><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="td-btn td-btn-primary" style="margin-top:.75rem;font-size:.85rem;padding:.6rem 1.25rem;">
                    <?php esc_html_e( 'Read Story', 'thedreamers' ); ?> &rarr;
                  </a>
                </div>
              </article>
            <?php endwhile; ?>
          </div>

          <div class="td-pagination" style="margin-top:2.5rem;">
            <?php
            echo paginate_links( array( // phpcs:ignore WordPress.Security.EscapeOutput
              'prev_text' => '&laquo; ' . esc_html__( 'Previous', 'thedreamers' ),
              'next_text' => esc_html__( 'Next', 'thedreamers' ) . ' &raquo;',
            ) );
            ?>
          </div>

        <?php else : ?>
          <div style="text-align:center;padding:4rem 0;">
            <h2><?php esc_html_e( 'No posts yet', 'thedreamers' ); ?></h2>
            <p style="color:var(--td-muted);"><?php esc_html_e( 'Stories and program updates will appear here. Check back soon!', 'thedreamers' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="td-btn td-btn-primary" style="margin-top:1.5rem;">
              <?php esc_html_e( '← Back to Home', 'thedreamers' ); ?>
            </a>
          </div>
        <?php endif; ?>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php get_footer();
