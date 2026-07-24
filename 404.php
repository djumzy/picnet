<?php
/**
 * THEDREAMERS — 404 Not Found
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-section td-bg-light" style="min-height:70vh;display:flex;align-items:center;">
  <div class="td-container">
    <div class="td-404">
      <div class="td-404-number">404</div>
      <h1 style="font-size:2rem;margin:.5rem 0 1rem;"><?php esc_html_e( 'Page Not Found', 'thedreamers' ); ?></h1>
      <p style="color:var(--td-muted);max-width:480px;margin:0 auto 2rem;">
        <?php esc_html_e( 'The page you\'re looking for doesn\'t exist or has been moved. Try heading back to the home page or use the search below.', 'thedreamers' ); ?>
      </p>
      <?php get_search_form(); ?>
      <div style="margin-top:2rem;display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="td-btn td-btn-primary td-btn-lg">
          <?php esc_html_e( '← Back to Home', 'thedreamers' ); ?>
        </a>
        <a href="<?php echo esc_url( td_page_url( 'contact' ) ); ?>" class="td-btn td-btn-outline td-btn-lg" style="color:var(--td-primary);border-color:var(--td-border);">
          <?php esc_html_e( 'Contact Us', 'thedreamers' ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
