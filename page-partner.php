<?php
/**
 * Template Name: Partner With Us
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-discussion.jpg' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Collaborate', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Partner With PICKNET', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'We partner with NGOs, government bodies, private sector companies, universities, and foundations to scale refugee-led development across Uganda.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'Partnership Types', 'thedreamers' ), __( 'How We Work Together', 'thedreamers' ), '', true ); ?>
    <div class="td-grid-3" style="gap:1.5rem;">
      <?php
      $types = array(
        array( 'icon' => '💰', 'color' => 'td-icon-amber', 'title' => __( 'Funding & Grants', 'thedreamers' ),           'desc' => __( 'Support our programs through project grants, core funding, or restricted donations. We provide transparent reporting and impact measurement.', 'thedreamers' ) ),
        array( 'icon' => '🤝', 'color' => 'td-icon-green', 'title' => __( 'Implementation Partnership', 'thedreamers' ), 'desc' => __( 'Co-deliver programs on the ground. We bring community trust, beneficiary networks, and local knowledge — you bring expertise and resources.', 'thedreamers' ) ),
        array( 'icon' => '🏪', 'color' => 'td-icon-blue',  'title' => __( 'Market & Supply Chain', 'thedreamers' ),      'desc' => __( 'Link PICKNET graduates to your market, supply chain, or procurement network — creating sustainable income for refugees.', 'thedreamers' ) ),
        array( 'icon' => '📚', 'color' => 'td-icon-amber', 'title' => __( 'Technical Assistance', 'thedreamers' ),        'desc' => __( 'Provide expertise, training, or technology that strengthens our programs and organizational capacity.', 'thedreamers' ) ),
        array( 'icon' => '📢', 'color' => 'td-icon-green', 'title' => __( 'Advocacy Partnership', 'thedreamers' ),        'desc' => __( 'Amplify refugee voices and champion policy change for refugee inclusion in formal economies.', 'thedreamers' ) ),
        array( 'icon' => '🔬', 'color' => 'td-icon-blue',  'title' => __( 'Research & Learning', 'thedreamers' ),         'desc' => __( 'Collaborate on research, evidence generation, and knowledge exchange to improve what works for displaced communities.', 'thedreamers' ) ),
      );
      foreach ( $types as $t ) : ?>
        <div class="td-card">
          <div class="td-card-body">
            <div class="td-icon-box <?php echo esc_attr( $t['color'] ); ?>" style="margin-bottom:1.25rem;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <h3 style="font-size:1rem;margin-bottom:.5rem;"><?php echo esc_html( $t['title'] ); ?></h3>
            <p style="font-size:.87rem;color:var(--td-muted);"><?php echo esc_html( $t['desc'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Current Partners -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading( __( 'Our Partners', 'thedreamers' ), __( 'Who We Work With', 'thedreamers' ), '', true ); ?>
    <div class="td-grid-3" style="gap:2rem;justify-items:center;align-items:center;max-width:860px;margin:0 auto;">
      <?php
      $partners = array(
        array( 'name' => 'BURACED Uganda',      'img' => THEDREAMERS_URI . '/assets/images/partner-buraced.jpg' ),
        array( 'name' => 'Ustawi Schools',      'img' => THEDREAMERS_URI . '/assets/images/partner-ustawi.jpg' ),
        array( 'name' => 'Infiniti8 Academy',  'img' => THEDREAMERS_URI . '/assets/images/partner-infiniti8.webp' ),
        array( 'name' => 'UNESCO',              'img' => THEDREAMERS_URI . '/assets/images/partner-unesco.jpg' ),
        array( 'name' => 'Hope & Ndeshi',       'img' => THEDREAMERS_URI . '/assets/images/partner-hope-ndeshi.jpg' ),
      );
      foreach ( $partners as $p ) : ?>
        <div style="text-align:center;padding:1.5rem;background:#fff;border-radius:1rem;border:1px solid var(--td-border);">
          <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" style="height:60px;width:auto;object-fit:contain;filter:none;transition:var(--td-transition);margin:0 auto;" loading="lazy">
          <p style="margin:.75rem 0 0;font-size:.82rem;font-weight:700;color:var(--td-muted);"><?php echo esc_html( $p['name'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Start a Partnership Conversation', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.8);max-width:560px;margin:0 auto 2rem;"><?php esc_html_e( 'Complete our partnership inquiry form and we\'ll respond within 3 business days. Every partnership is built around shared values and mutual accountability.', 'thedreamers' ); ?></p>
    <a href="<?php echo esc_url( td_opt( 'partner_form', 'https://forms.gle/Jt2Fm4AvfwbpCzWs9' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer">
      <?php esc_html_e( 'Open Partnership Form ↗', 'thedreamers' ); ?>
    </a>
  </div>
</section>

<?php get_footer();
