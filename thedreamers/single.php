<?php
/**
 * THEDREAMERS — Single Post
 *
 * @package TheDreamers
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- Post Hero -->
<section class="td-page-hero" style="min-height:380px;">
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'thedreamers-hero', array( 'aria-hidden' => 'true' ) ); ?>
    <div class="td-page-hero-overlay"></div>
  <?php endif; ?>
  <div class="td-container">
    <div class="td-page-hero-content">
      <div class="td-post-meta" style="justify-content:center;">
        <?php
        $cats = get_the_category();
        if ( $cats ) :
          foreach ( $cats as $cat ) :
        ?>
          <span class="td-post-card-cat"><a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" style="color:inherit;"><?php echo esc_html( $cat->name ); ?></a></span>
        <?php
          endforeach;
        endif;
        ?>
        <span style="color:rgba(255,255,255,.65);"><?php echo esc_html( get_the_date() ); ?></span>
        <span style="color:rgba(255,255,255,.65);">
          <?php
          printf(
            /* translators: %s: reading time in minutes */
            esc_html__( '%s min read', 'thedreamers' ),
            absint( ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ) )
          );
          ?>
        </span>
      </div>
      <h1><?php the_title(); ?></h1>
      <?php if ( get_the_excerpt() ) : ?>
        <p style="font-size:1.05rem;"><?php the_excerpt(); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Post Content -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <div class="td-sidebar-wrap">

      <!-- Article -->
      <article>
        <div class="td-single-content">
          <?php the_content(); ?>
        </div>

        <!-- Tags -->
        <?php if ( has_tag() ) : ?>
          <div style="margin-top:2rem;padding-top:1.5rem;border-top:1px solid var(--td-border);display:flex;flex-wrap:wrap;gap:.5rem;">
            <span style="font-weight:700;font-size:.85rem;"><?php esc_html_e( 'Tags:', 'thedreamers' ); ?></span>
            <?php the_tags( '', ' ', '' ); ?>
          </div>
        <?php endif; ?>

        <!-- Author box -->
        <div style="background:var(--td-light);border-radius:1.25rem;padding:1.5rem;margin-top:2.5rem;display:flex;gap:1.25rem;align-items:flex-start;">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 64, '', '', array( 'class' => 'td-rounded' ) ); ?>
          <div>
            <p style="font-weight:700;margin:0 0 .3rem;"><?php the_author(); ?></p>
            <p style="font-size:.87rem;color:var(--td-muted);margin:0;"><?php the_author_meta( 'description' ) ? the_author_meta( 'description' ) : esc_html_e( 'PICKNET Team', 'thedreamers' ); ?></p>
          </div>
        </div>

        <!-- Post nav -->
        <nav style="display:flex;justify-content:space-between;margin-top:2.5rem;gap:1rem;flex-wrap:wrap;">
          <?php
          $prev = get_previous_post();
          $next = get_next_post();
          if ( $prev ) : ?>
            <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="td-btn td-btn-primary">
              &larr; <?php echo esc_html( wp_trim_words( $prev->post_title, 5 ) ); ?>
            </a>
          <?php endif;
          if ( $next ) : ?>
            <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="td-btn td-btn-primary" style="margin-left:auto;">
              <?php echo esc_html( wp_trim_words( $next->post_title, 5 ) ); ?> &rarr;
            </a>
          <?php endif; ?>
        </nav>

        <!-- Comments -->
        <?php if ( comments_open() || get_comments_number() ) : ?>
          <div style="margin-top:3rem;">
            <?php comments_template(); ?>
          </div>
        <?php endif; ?>
      </article>

      <!-- Sidebar -->
      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer();
