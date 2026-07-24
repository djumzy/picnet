<?php
/**
 * Template Name: PICKNET Academy
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/digital-skills.png' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'CYSED Program', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'PICKNET Academy', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( '12-week skills training across 12 vocational and digital tracks — equipping refugees with certified, market-ready competencies for the modern economy.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Overview -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <div class="td-grid-2" style="gap:3rem;align-items:center;">
      <div>
        <span class="td-badge"><?php esc_html_e( 'CYSED Program', 'thedreamers' ); ?></span>
        <h2><?php esc_html_e( 'What is PICKNET Academy?', 'thedreamers' ); ?></h2>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'PICKNET Academy\'s flagship initiative — the Community Youth Skills and Enterprise Development (CYSED) program — is a 12-week immersive training that blends traditional vocational skills with AI-integrated digital competencies, giving participants not just the skills they need but a pathway to enterprise.', 'thedreamers' ); ?></p>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'Every track is paired with business mentorship, entrepreneurship modules, and pathways to VELA savings groups — ensuring participants don\'t just learn, they build.', 'thedreamers' ); ?></p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1.5rem;">
          <?php foreach ( array(
            array( 'v' => '12', 'l' => __( 'Weeks', 'thedreamers' ) ),
            array( 'v' => '12', 'l' => __( 'Tracks', 'thedreamers' ) ),
            array( 'v' => '1,157+', 'l' => __( 'Graduates', 'thedreamers' ) ),
            array( 'v' => '90%+', 'l' => __( 'Employed / Self-Employed', 'thedreamers' ) ),
          ) as $stat ) : ?>
            <div class="td-metric-card">
              <p class="td-metric-value"><?php echo esc_html( $stat['v'] ); ?></p>
              <p class="td-metric-label"><?php echo esc_html( $stat['l'] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/skilling.jpg' ); ?>" alt="<?php esc_attr_e( 'CYSED Training Session', 'thedreamers' ); ?>" style="border-radius:1.5rem;width:100%;box-shadow:var(--td-shadow-lg);">
      </div>
    </div>
  </div>
</section>

<!-- 12 Tracks -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading( __( 'Skills That Open Doors', 'thedreamers' ), __( '12 Training Tracks', 'thedreamers' ), __( 'Choose your path. Every track includes digital skills integration, business mentorship, and enterprise development.', 'thedreamers' ), true ); ?>
    <div class="td-grid-4" style="gap:1rem;">
      <?php
      $tracks = array(
        array( 'n' => '01', 'title' => __( 'Fashion Design & Tailoring', 'thedreamers' ),       'icon' => '✂' ),
        array( 'n' => '02', 'title' => __( 'ICT & Digital Literacy', 'thedreamers' ),            'icon' => '💻' ),
        array( 'n' => '03', 'title' => __( 'Agribusiness & Food Processing', 'thedreamers' ),   'icon' => '🌱' ),
        array( 'n' => '04', 'title' => __( 'Knitting & Crocheting', 'thedreamers' ),             'icon' => '🧶' ),
        array( 'n' => '05', 'title' => __( 'Graphic Design & Media', 'thedreamers' ),           'icon' => '🎨' ),
        array( 'n' => '06', 'title' => __( 'Carpentry & Joinery', 'thedreamers' ),              'icon' => '🔨' ),
        array( 'n' => '07', 'title' => __( 'Hairdressing & Beauty', 'thedreamers' ),            'icon' => '✨' ),
        array( 'n' => '08', 'title' => __( 'Hospitality & Catering', 'thedreamers' ),           'icon' => '🍽' ),
        array( 'n' => '09', 'title' => __( 'Entrepreneurship & Business', 'thedreamers' ),      'icon' => '📊' ),
        array( 'n' => '10', 'title' => __( 'Creative Arts & Crafts', 'thedreamers' ),           'icon' => '🖌' ),
        array( 'n' => '11', 'title' => __( 'Mobile Money & FinTech', 'thedreamers' ),           'icon' => '📱' ),
        array( 'n' => '12', 'title' => __( 'Soap-making & Sanitation Products', 'thedreamers' ),'icon' => '🧼' ),
      );
      foreach ( $tracks as $t ) : ?>
        <div style="background:#fff;border:1px solid var(--td-border);border-radius:1rem;padding:1.25rem;text-align:center;transition:var(--td-transition);" class="td-card">
          <div style="font-size:1.75rem;margin-bottom:.75rem;"><?php echo $t['icon']; // phpcs:ignore ?></div>
          <span style="font-family:var(--td-font-heading);font-size:.65rem;font-weight:800;text-transform:uppercase;letter-spacing:.1em;color:var(--td-secondary);"><?php echo esc_html( $t['n'] ); ?></span>
          <h4 style="font-size:.88rem;margin:.3rem 0 0;line-height:1.35;"><?php echo esc_html( $t['title'] ); ?></h4>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Market Hub -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <div class="td-grid-2" style="gap:3rem;align-items:center;">
      <div>
        <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-sensitization.jpg' ); ?>" alt="" style="border-radius:1.5rem;width:100%;box-shadow:var(--td-shadow-lg);">
      </div>
      <div>
        <span class="td-badge"><?php esc_html_e( 'Post-Training', 'thedreamers' ); ?></span>
        <h2><?php esc_html_e( 'The Market Hub', 'thedreamers' ); ?></h2>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'After graduation, Academy alumni access the PICKNET Market Hub — a business development ecosystem providing market connections, product development, legal registration support, and ongoing coaching to turn skills into sustainable enterprises.', 'thedreamers' ); ?></p>
        <ul style="list-style:none;padding:0;display:flex;flex-direction:column;gap:.75rem;margin-top:1.25rem;">
          <?php foreach ( array( __( 'Market linkages & buyer connections', 'thedreamers' ), __( 'Business plan development', 'thedreamers' ), __( 'Legal registration assistance', 'thedreamers' ), __( 'Product pricing & costing workshops', 'thedreamers' ), __( 'Access to VELA savings capital', 'thedreamers' ) ) as $item ) : ?>
            <li style="display:flex;align-items:center;gap:.75rem;font-size:.9rem;">
              <span style="width:1.5rem;height:1.5rem;border-radius:50%;background:rgba(26,92,56,.1);color:var(--td-primary);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-weight:800;font-size:.75rem;">✓</span>
              <?php echo esc_html( $item ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Apply CTA -->
<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Apply to PICKNET Academy', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.8);margin:0 auto 2rem;max-width:560px;"><?php esc_html_e( 'Applications are open to youth aged 15–35 in Rwamwanja. Women and the most vulnerable are prioritized. Intake opens quarterly.', 'thedreamers' ); ?></p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( td_opt( 'apply_form_url', 'https://forms.gle/s5cZg7GFVpFPG7dEA' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Apply Now ↗', 'thedreamers' ); ?></a>
      <a href="<?php echo esc_url( td_opt( 'academy_url', 'https://picknet.org/academy/' ) ); ?>" class="td-btn td-btn-outline td-btn-lg" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Visit Academy Website ↗', 'thedreamers' ); ?></a>
    </div>
  </div>
</section>

<?php get_footer();
