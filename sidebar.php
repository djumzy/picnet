<?php
/**
 * THEDREAMERS — Sidebar
 *
 * @package TheDreamers
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) return;
?>
<aside class="td-sidebar" role="complementary">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>

  <!-- Newsletter widget in sidebar -->
  <div class="td-widget">
    <h4 class="td-widget-title"><?php esc_html_e( 'Stay Updated', 'thedreamers' ); ?></h4>
    <?php echo do_shortcode( '[picknet_newsletter heading="" subheading="Get news and impact stories straight to your inbox." style="sidebar"]' ); ?>
  </div>

  <!-- Recent Posts -->
  <div class="td-widget">
    <h4 class="td-widget-title"><?php esc_html_e( 'Recent Stories', 'thedreamers' ); ?></h4>
    <?php
    $recent = new WP_Query( array( 'posts_per_page' => 5, 'post_status' => 'publish' ) );
    if ( $recent->have_posts() ) :
      echo '<ul style="list-style:none;padding:0;margin:0;">';
      while ( $recent->have_posts() ) : $recent->the_post(); ?>
        <li style="padding:.5rem 0;border-bottom:1px solid var(--td-border);">
          <a href="<?php the_permalink(); ?>" style="font-weight:600;font-size:.87rem;color:var(--td-dark);">
            <?php the_title(); ?>
          </a>
          <p style="font-size:.75rem;color:var(--td-muted);margin:.2rem 0 0;"><?php echo esc_html( get_the_date() ); ?></p>
        </li>
      <?php endwhile;
      echo '</ul>';
    endif;
    wp_reset_postdata();
    ?>
  </div>

  <!-- Categories -->
  <div class="td-widget">
    <h4 class="td-widget-title"><?php esc_html_e( 'Categories', 'thedreamers' ); ?></h4>
    <ul style="list-style:none;padding:0;margin:0;">
      <?php
      $cats = get_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'hide_empty' => true ) );
      foreach ( $cats as $cat ) :
      ?>
        <li style="padding:.35rem 0;border-bottom:1px solid var(--td-border);">
          <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" style="font-size:.88rem;">
            <?php echo esc_html( $cat->name ); ?>
            <span style="color:var(--td-muted);font-size:.8rem;">(<?php echo absint( $cat->count ); ?>)</span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

</aside>
