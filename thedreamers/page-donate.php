<?php
/**
 * Template Name: Donate
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <div class="td-page-hero-overlay" style="background:linear-gradient(135deg,#1a5c38,#d97706);position:absolute;inset:0;opacity:.95;"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Support Our Work', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Make a Donation', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Every dollar you give trains a youth, supports a woman entrepreneur, or protects a child. 90% of donations go directly to programs.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Why Donate -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <div style="max-width:820px;margin:0 auto;text-align:center;">
      <span class="td-badge"><?php esc_html_e( 'Your Impact', 'thedreamers' ); ?></span>
      <h2><?php esc_html_e( 'What Your Donation Does', 'thedreamers' ); ?></h2>
      <p style="color:var(--td-muted);"><?php esc_html_e( 'PICKNET maintains 90%+ program efficiency. Every contribution — large or small — directly reaches the youth, women, and children we serve.', 'thedreamers' ); ?></p>
    </div>
    <div class="td-amount-grid" style="max-width:600px;margin:2rem auto;grid-template-columns:repeat(2,1fr);">
      <?php
      $amounts = array(
        array( 'val' => '$25',   'label' => __( 'Trains a youth for one week', 'thedreamers' ) ),
        array( 'val' => '$50',   'label' => __( 'Skills a woman entrepreneur', 'thedreamers' ) ),
        array( 'val' => '$100',  'label' => __( 'Helps launch one business', 'thedreamers' ) ),
        array( 'val' => '$250',  'label' => __( 'Establishes a VELA savings group', 'thedreamers' ) ),
        array( 'val' => '$500',  'label' => __( 'Funds a child protection safe space for a month', 'thedreamers' ) ),
        array( 'val' => '$1,000','label' => __( 'Sponsors a full CYSED training cohort', 'thedreamers' ) ),
      );
      foreach ( $amounts as $a ) : ?>
        <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>" class="td-amount-card" target="_blank" rel="noopener noreferrer">
          <p class="td-amount-value"><?php echo esc_html( $a['val'] ); ?></p>
          <p class="td-amount-label"><?php echo esc_html( $a['label'] ); ?></p>
        </a>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;">
      <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>"
         class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer">
        ♥ <?php esc_html_e( 'Donate Now via PayPal', 'thedreamers' ); ?>
      </a>
      <p style="font-size:.8rem;color:var(--td-muted);margin-top:.75rem;"><?php esc_html_e( 'Secure payment via PayPal. Credit/debit cards accepted. No account required.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Transparency -->
<section class="td-section td-bg-light">
  <div class="td-container td-container-sm">
    <div style="background:#fff;border-radius:1.5rem;padding:2.5rem;border:1px solid var(--td-border);">
      <h3 style="text-align:center;margin-bottom:1.5rem;"><?php esc_html_e( 'Our Financial Commitment', 'thedreamers' ); ?></h3>
      <?php
      $commitments = array(
        array( 'v' => '90%+', 'l' => __( 'of funds reach programs directly', 'thedreamers' ) ),
        array( 'v' => '100%', 'l' => __( 'transparent reporting to all donors', 'thedreamers' ) ),
        array( 'v' => '0',    'l' => __( 'administrative overhead on small gifts', 'thedreamers' ) ),
      );
      foreach ( $commitments as $c ) : ?>
        <div style="display:flex;align-items:center;gap:1.5rem;padding:1rem 0;border-bottom:1px solid var(--td-border);">
          <span style="font-family:var(--td-font-heading);font-size:1.6rem;font-weight:800;color:var(--td-primary);min-width:4rem;"><?php echo esc_html( $c['v'] ); ?></span>
          <p style="margin:0;color:var(--td-muted);font-size:.92rem;"><?php echo esc_html( $c['l'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer();
