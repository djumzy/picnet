<?php
/**
 * Template Name: Our Approach
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/mentorship.png' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'How We Work', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Our Approach', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'The Train–Mentor–Finance model is PICKNET\'s integrated pathway from vulnerability to self-reliance — each pillar reinforces the others.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Three Pillars -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'The PICKNET Model', 'thedreamers' ), __( 'Train–Mentor–Finance', 'thedreamers' ), __( 'Three pillars that together create sustainable economic independence for refugees and host communities.', 'thedreamers' ), true ); ?>

    <div class="td-grid-3" style="gap:2rem;">
      <?php
      $pillars = array(
        array(
          'num'   => '01',
          'cls'   => 'td-tmf-train',
          'badge' => __( 'Pillar One', 'thedreamers' ),
          'title' => __( 'Train', 'thedreamers' ),
          'desc'  => __( 'The CYSED Academy delivers 12-week vocational and digital skills programs across 12 tracks. Participants gain certified, market-relevant competencies in tailoring, ICT, agribusiness, creative arts, hospitality, and more. Training is practical, AI-integrated, and designed around real employer needs.', 'thedreamers' ),
          'items' => array( __( '12 vocational tracks', 'thedreamers' ), __( 'AI-integrated digital skills', 'thedreamers' ), __( 'Certified graduates', 'thedreamers' ), __( 'Job readiness coaching', 'thedreamers' ) ),
        ),
        array(
          'num'   => '02',
          'cls'   => 'td-tmf-mentor',
          'badge' => __( 'Pillar Two', 'thedreamers' ),
          'title' => __( 'Mentor', 'thedreamers' ),
          'desc'  => __( 'Skills without enterprise mindset rarely lead to sustainable livelihoods. PICKNET pairs every graduate with experienced business mentors who guide them through business planning, financial management, and market navigation — turning classroom learning into real economic impact.', 'thedreamers' ),
          'items' => array( __( '1-on-1 business mentorship', 'thedreamers' ), __( 'Market Hub access', 'thedreamers' ), __( 'Enterprise skills workshops', 'thedreamers' ), __( 'Peer learning networks', 'thedreamers' ) ),
        ),
        array(
          'num'   => '03',
          'cls'   => 'td-tmf-finance',
          'badge' => __( 'Pillar Three', 'thedreamers' ),
          'title' => __( 'Finance', 'thedreamers' ),
          'desc'  => __( 'Without access to capital, skills and mentorship cannot create businesses. PICKNET\'s Village Enterprise Learning Associations (VELAs) provide community-based savings, credit, and financial literacy — giving graduates the start-up capital they need to launch and grow sustainable enterprises.', 'thedreamers' ),
          'items' => array( __( '40+ VELA savings groups', 'thedreamers' ), __( 'Micro-credit access', 'thedreamers' ), __( 'Financial literacy training', 'thedreamers' ), __( '1,500+ savers empowered', 'thedreamers' ) ),
        ),
      );
      foreach ( $pillars as $p ) : ?>
        <div class="td-tmf-card <?php echo esc_attr( $p['cls'] ); ?>">
          <span class="td-badge td-badge-amber"><?php echo esc_html( $p['badge'] ); ?></span>
          <span class="td-tmf-number"><?php echo esc_html( $p['num'] ); ?></span>
          <h2 style="font-size:2rem;margin:.5rem 0 1rem;"><?php echo esc_html( $p['title'] ); ?></h2>
          <p style="color:var(--td-muted);line-height:1.75;margin-bottom:1.25rem;"><?php echo esc_html( $p['desc'] ); ?></p>
          <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.5rem;">
            <?php foreach ( $p['items'] as $item ) : ?>
              <li style="display:flex;align-items:center;gap:.5rem;font-size:.88rem;font-weight:600;">
                <span style="color:var(--td-primary);font-size:.7rem;">&#9679;</span>
                <?php echo esc_html( $item ); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Impact Pathway -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading( __( 'Step by Step', 'thedreamers' ), __( 'The PICKNET Impact Pathway', 'thedreamers' ), __( 'From first contact to sustainable livelihood — how a participant moves through the PICKNET journey.', 'thedreamers' ), true ); ?>
    <div style="max-width:760px;margin:0 auto;position:relative;">
      <div style="position:absolute;left:1.4rem;top:2rem;bottom:2rem;width:2px;background:linear-gradient(to bottom,var(--td-primary),var(--td-secondary));opacity:.3;"></div>
      <?php
      $steps = array(
        array( 'n' => '1', 'color' => 'var(--td-primary)',   'title' => __( 'Community Outreach & Identification', 'thedreamers' ), 'desc' => __( 'PICKNET staff and community volunteers identify vulnerable youth and women who would benefit from our programs through grassroots outreach.', 'thedreamers' ) ),
        array( 'n' => '2', 'color' => 'var(--td-secondary)', 'title' => __( 'Needs Assessment & Enrollment', 'thedreamers' ),       'desc' => __( 'Each participant completes a needs assessment to match them with the right vocational track and support services.', 'thedreamers' ) ),
        array( 'n' => '3', 'color' => 'var(--td-primary)',   'title' => __( 'CYSED Training (12 Weeks)', 'thedreamers' ),           'desc' => __( 'Participants complete intensive, practical training in their chosen vocational and digital skills track at the PICKNET Academy.', 'thedreamers' ) ),
        array( 'n' => '4', 'color' => 'var(--td-secondary)', 'title' => __( 'Business Mentorship & Enterprise Development', 'thedreamers' ), 'desc' => __( 'Graduates are paired with mentors and participate in enterprise workshops to develop their business plans and management skills.', 'thedreamers' ) ),
        array( 'n' => '5', 'color' => 'var(--td-primary)',   'title' => __( 'VELA Enrolment & Capital Access', 'thedreamers' ),    'desc' => __( 'Graduates join a Village Enterprise Learning Association, begin saving, and access community credit to fund their business launch.', 'thedreamers' ) ),
        array( 'n' => '6', 'color' => 'var(--td-secondary)', 'title' => __( 'Market Hub & Business Launch', 'thedreamers' ),       'desc' => __( 'Through the PICKNET Market Hub, entrepreneurs access market linkages, sales platforms, and ongoing business development support.', 'thedreamers' ) ),
        array( 'n' => '7', 'color' => 'var(--td-primary)',   'title' => __( 'Monitoring, Evaluation & Alumni Network', 'thedreamers' ), 'desc' => __( 'PICKNET\'s MEL team tracks participant progress over 12 months post-graduation, and alumni become peer mentors for future cohorts.', 'thedreamers' ) ),
      );
      foreach ( $steps as $step ) : ?>
        <div style="display:flex;gap:1.5rem;margin-bottom:2rem;position:relative;">
          <div style="width:2.75rem;height:2.75rem;border-radius:50%;background:<?php echo esc_attr( $step['color'] ); ?>;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-family:var(--td-font-heading);flex-shrink:0;z-index:1;">
            <?php echo esc_html( $step['n'] ); ?>
          </div>
          <div style="background:#fff;border:1px solid var(--td-border);border-radius:1rem;padding:1.25rem;flex:1;">
            <h3 style="font-size:1rem;margin-bottom:.4rem;"><?php echo esc_html( $step['title'] ); ?></h3>
            <p style="font-size:.88rem;color:var(--td-muted);margin:0;"><?php echo esc_html( $step['desc'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Ready to Apply?', 'thedreamers' ); ?></h2>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( td_opt( 'apply_form_url', 'https://forms.gle/s5cZg7GFVpFPG7dEA' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Apply Now ↗', 'thedreamers' ); ?></a>
      <a href="<?php echo esc_url( td_page_url( 'programs' ) ); ?>" class="td-btn td-btn-outline td-btn-lg"><?php esc_html_e( 'View All Programs', 'thedreamers' ); ?></a>
    </div>
  </div>
</section>

<?php get_footer();
