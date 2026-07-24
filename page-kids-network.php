<?php
/**
 * Template Name: Kids Network
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/kids.png' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Child Protection', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'PICKNET Kids Network', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Every child deserves safety, dignity, and a future. The Kids Network protects vulnerable, street-connected, and abandoned children across Rwamwanja.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Who We Serve -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'Who We Protect', 'thedreamers' ), __( 'The Children We Serve', 'thedreamers' ), __( 'In Rwamwanja Refugee Settlement, thousands of children face acute vulnerability. The Kids Network is their safety net.', 'thedreamers' ), true ); ?>
    <div class="td-grid-3" style="gap:1.5rem;">
      <?php
      $groups = array(
        array( 'icon' => '🏠', 'title' => __( 'Street-Connected Children', 'thedreamers' ),    'desc' => __( 'Children who sleep on the streets or use streets for livelihood — exposed to abuse, exploitation, and trafficking.', 'thedreamers' ) ),
        array( 'icon' => '👧', 'title' => __( 'Abandoned & Orphaned Children', 'thedreamers' ), 'desc' => __( 'Children who have lost parents to conflict, disease, or separation — living without family support or legal guardianship.', 'thedreamers' ) ),
        array( 'icon' => '🛡', 'title' => __( 'Children at Risk of Abuse', 'thedreamers' ),     'desc' => __( 'Children vulnerable to gender-based violence, child labor, early marriage, and other forms of exploitation.', 'thedreamers' ) ),
        array( 'icon' => '📚', 'title' => __( 'Out-of-School Children', 'thedreamers' ),         'desc' => __( 'Children who have dropped out of or never attended school — missing the education that creates long-term resilience.', 'thedreamers' ) ),
        array( 'icon' => '💙', 'title' => __( 'Psychosocially Distressed Children', 'thedreamers' ), 'desc' => __( 'Children experiencing trauma, grief, and displacement — who need healing and psychosocial support before they can thrive.', 'thedreamers' ) ),
        array( 'icon' => '♿', 'title' => __( 'Children with Disabilities', 'thedreamers' ),     'desc' => __( 'Children with physical or cognitive disabilities who face additional barriers to education, health, and protection.', 'thedreamers' ) ),
      );
      foreach ( $groups as $g ) : ?>
        <div style="background:#fff;border:1px solid var(--td-border);border-radius:1rem;padding:1.5rem;" class="td-card">
          <div style="font-size:1.75rem;margin-bottom:.75rem;"><?php echo $g['icon']; // phpcs:ignore ?></div>
          <h3 style="font-size:1rem;margin-bottom:.5rem;"><?php echo esc_html( $g['title'] ); ?></h3>
          <p style="font-size:.87rem;color:var(--td-muted);"><?php echo esc_html( $g['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- What We Do -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <div class="td-grid-2" style="gap:3rem;align-items:center;">
      <div>
        <span class="td-badge"><?php esc_html_e( 'Our Response', 'thedreamers' ); ?></span>
        <h2><?php esc_html_e( 'What the Kids Network Does', 'thedreamers' ); ?></h2>
        <div style="display:flex;flex-direction:column;gap:1.25rem;margin-top:1.5rem;">
          <?php
          $activities = array(
            array( 'title' => __( 'Safe Spaces', 'thedreamers' ),             'desc' => __( 'Three child-friendly safe spaces where children can rest, play, and receive support away from danger.', 'thedreamers' ) ),
            array( 'title' => __( 'Psychosocial Support', 'thedreamers' ),    'desc' => __( 'Trauma-informed counselling and group healing sessions led by trained child protection officers.', 'thedreamers' ) ),
            array( 'title' => __( 'Remedial Education', 'thedreamers' ),      'desc' => __( 'Catch-up learning for out-of-school children to help them re-enrol in formal or non-formal education.', 'thedreamers' ) ),
            array( 'title' => __( 'Nutrition & Health', 'thedreamers' ),      'desc' => __( 'Nutritional support and health referrals for children experiencing food insecurity or medical needs.', 'thedreamers' ) ),
            array( 'title' => __( 'Family Reunification', 'thedreamers' ),    'desc' => __( 'Tracing and reunification services for children separated from their families during displacement.', 'thedreamers' ) ),
            array( 'title' => __( 'Community Awareness', 'thedreamers' ),     'desc' => __( 'Training community leaders, parents, and teachers on child rights, safeguarding, and protection principles.', 'thedreamers' ) ),
          );
          foreach ( $activities as $act ) : ?>
            <div style="display:flex;gap:1rem;">
              <span style="width:2rem;height:2rem;border-radius:.5rem;background:rgba(26,92,56,.1);color:var(--td-primary);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-weight:800;font-size:.75rem;">✓</span>
              <div>
                <p style="font-weight:700;margin:0 0 .2rem;font-size:.92rem;"><?php echo esc_html( $act['title'] ); ?></p>
                <p style="font-size:.85rem;color:var(--td-muted);margin:0;"><?php echo esc_html( $act['desc'] ); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/kids.png' ); ?>" alt="" style="border-radius:1.5rem;width:100%;box-shadow:var(--td-shadow-lg);">
        <div class="td-grid-2" style="gap:1rem;margin-top:1.5rem;">
          <?php foreach ( array(
            array( 'v' => '150+', 'l' => __( 'Children Reached', 'thedreamers' ) ),
            array( 'v' => '3',    'l' => __( 'Safe Spaces', 'thedreamers' ) ),
            array( 'v' => '90%',  'l' => __( 'Return to School', 'thedreamers' ) ),
            array( 'v' => '100%', 'l' => __( 'Child-Focused', 'thedreamers' ) ),
          ) as $s ) : ?>
            <div class="td-metric-card">
              <p class="td-metric-value"><?php echo esc_html( $s['v'] ); ?></p>
              <p class="td-metric-label"><?php echo esc_html( $s['l'] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Safeguarding Policy -->
<section class="td-section td-bg-white">
  <div class="td-container td-container-md">
    <div style="background:rgba(26,92,56,.04);border:1px solid rgba(26,92,56,.15);border-radius:1.5rem;padding:2.5rem;text-align:center;">
      <div style="width:3.5rem;height:3.5rem;background:rgba(26,92,56,.1);color:var(--td-primary);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;font-size:1.25rem;">🛡</div>
      <h2 style="font-size:1.5rem;margin-bottom:1rem;"><?php esc_html_e( 'Our Safeguarding Commitment', 'thedreamers' ); ?></h2>
      <p style="color:var(--td-muted);max-width:640px;margin:0 auto;"><?php esc_html_e( 'PICKNET maintains a comprehensive child safeguarding policy aligned with international standards. All staff, volunteers, and partners undergo background checks and mandatory child protection training. We take zero tolerance to abuse, neglect, and exploitation of children.', 'thedreamers' ); ?></p>
      <a href="<?php echo esc_url( td_page_url( 'resources' ) ); ?>" class="td-btn td-btn-primary" style="margin-top:1.5rem;">
        <?php esc_html_e( 'View Our Policies', 'thedreamers' ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer();
