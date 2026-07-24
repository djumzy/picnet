<?php
/**
 * Template Name: About PICKNET
 *
 * @package TheDreamers
 */
get_header(); ?>

<!-- Hero -->
<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/team.jpg' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Who We Are', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'About PICKNET', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Founded by refugees BONIFACE AHISHAKIYE and KOBUSINGE JOSELYNE. Serving Rwamwanja Refugee Settlement and Kamwenge District since 2018.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Our Story -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <div class="td-grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="td-badge"><?php esc_html_e( 'Established 2018', 'thedreamers' ); ?></span>
        <h2><?php esc_html_e( 'Our Story', 'thedreamers' ); ?></h2>
        <p><?php esc_html_e( 'PICKNET (Poverty, Injustice Consultancy and Kids Network) is a refugee-led, community-driven organization working in Rwamwanja Refugee Settlement and surrounding host communities in western Uganda, registered with URSB on June 21, 2018.', 'thedreamers' ); ?></p>
        <p><?php esc_html_e( 'At PICKNET, we believe that communities affected by poverty and displacement are not passive recipients of aid — they are powerful agents of change. When equipped with the right skills, opportunities, and support systems, they can transform their own lives and build resilient, self-reliant futures.', 'thedreamers' ); ?></p>
      </div>
      <div>
        <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-discussion.jpg' ); ?>" alt="<?php esc_attr_e( 'Community discussion', 'thedreamers' ); ?>" style="border-radius:1.5rem;width:100%;box-shadow:var(--td-shadow-lg);">
      </div>
    </div>
  </div>
</section>

<!-- Vision & Mission -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <div class="td-grid-2" style="gap:2rem;">
      <div style="background:#fff;border-radius:1.25rem;padding:2rem;border:1px solid var(--td-border);">
        <div class="td-icon-box td-icon-amber" style="margin-bottom:1.25rem;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h2 style="font-size:1.4rem;"><?php esc_html_e( 'Our Vision', 'thedreamers' ); ?></h2>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'A world where every refugee and displaced person has the opportunity to live with dignity, access quality education, and build sustainable livelihoods through their own resilience and innovation.', 'thedreamers' ); ?></p>
      </div>
      <div style="background:#fff;border-radius:1.25rem;padding:2rem;border:1px solid var(--td-border);">
        <div class="td-icon-box td-icon-green" style="margin-bottom:1.25rem;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <h2 style="font-size:1.4rem;"><?php esc_html_e( 'Our Mission', 'thedreamers' ); ?></h2>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'To empower youth and marginalized communities through practical education, entrepreneurship support, financial literacy, and community-driven initiatives that promote economic independence and inclusive development.', 'thedreamers' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Core Values -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'What Drives Us', 'thedreamers' ), __( 'Our Core Values', 'thedreamers' ), __( 'Our work is guided by values that shape our approach and impact — from the ground up, every day.', 'thedreamers' ), true ); ?>
    <div class="td-grid-3" style="gap:1.25rem;">
      <?php
      $values = array(
        array( 'icon_color' => 'td-icon-amber',   'title' => __( 'Empowerment', 'thedreamers' ),               'desc' => __( 'Unlocking the potential of youth and women to lead their own development.', 'thedreamers' ) ),
        array( 'icon_color' => 'td-icon-blue',    'title' => __( 'Integrity & Accountability', 'thedreamers' ), 'desc' => __( 'Transparent and ethical practices in every decision and action.', 'thedreamers' ) ),
        array( 'icon_color' => 'td-icon-green',   'title' => __( 'Inclusion & Equity', 'thedreamers' ),         'desc' => __( 'Equal access for all, especially marginalized and displaced groups.', 'thedreamers' ) ),
        array( 'icon_color' => 'td-icon-amber',   'title' => __( 'Innovation & Creativity', 'thedreamers' ),    'desc' => __( 'Developing solutions that respond to evolving community needs.', 'thedreamers' ) ),
        array( 'icon_color' => 'td-icon-green',   'title' => __( 'Community Participation', 'thedreamers' ),    'desc' => __( 'Locally driven development approaches centered on community voice.', 'thedreamers' ) ),
        array( 'icon_color' => 'td-icon-emerald', 'title' => __( 'Sustainability', 'thedreamers' ),             'desc' => __( 'Building long-term resilience and impact beyond short-term aid.', 'thedreamers' ) ),
        array( 'icon_color' => 'td-icon-amber',   'title' => __( 'Partnership & Collaboration', 'thedreamers' ),'desc' => __( 'Working together to scale solutions and amplify impact.', 'thedreamers' ) ),
      );
      foreach ( $values as $v ) : ?>
        <div style="background:#fff;border:1px solid var(--td-border);border-radius:1rem;padding:1.5rem;transition:var(--td-transition);" class="td-card">
          <div class="td-icon-box <?php echo esc_attr( $v['icon_color'] ); ?>" style="margin-bottom:1rem;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
          </div>
          <h3 style="font-size:1rem;margin-bottom:.4rem;"><?php echo esc_html( $v['title'] ); ?></h3>
          <p style="font-size:.87rem;color:var(--td-muted);"><?php echo esc_html( $v['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Why PICKNET Exists -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <div class="td-grid-2" style="gap:3rem;align-items:center;">
      <div style="border-radius:1.5rem;overflow:hidden;box-shadow:var(--td-shadow-lg);">
        <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-sensitization.jpg' ); ?>" alt="" style="width:100%;height:340px;object-fit:cover;">
      </div>
      <div>
        <h2><?php esc_html_e( 'Why PICKNET Exists', 'thedreamers' ); ?></h2>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'Refugee and host communities have enormous untapped potential. With the right support, they can transform their own futures. PICKNET exists to unlock that potential — turning vulnerability into resilience, innovation, and opportunity.', 'thedreamers' ); ?></p>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'In displacement contexts like Rwamwanja, young people face systemic barriers: limited access to vocational skills, high unemployment, few entrepreneurship opportunities, low financial literacy, and social exclusion.', 'thedreamers' ); ?></p>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'Despite these challenges, young people possess talent, creativity, and ambition. What they lack is access to opportunity. PICKNET was created to bridge this gap.', 'thedreamers' ); ?></p>
        <div style="display:flex;flex-wrap:wrap;gap:.6rem;margin-top:1.25rem;">
          <?php foreach ( array( __( 'Inclusive by Design', 'thedreamers' ), __( 'SDG-Aligned', 'thedreamers' ), __( 'Refugee-Led', 'thedreamers' ), __( 'Community-Centered', 'thedreamers' ) ) as $tag ) : ?>
            <span class="td-tag"><?php echo esc_html( $tag ); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Join the Movement', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.8);max-width:560px;margin:0 auto 2rem;"><?php esc_html_e( 'Partner with us, volunteer, or donate to support refugee-led development in Rwamwanja.', 'thedreamers' ); ?></p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( td_page_url( 'contact' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg"><?php esc_html_e( 'Get in Touch', 'thedreamers' ); ?></a>
      <a href="<?php echo esc_url( td_page_url( 'team' ) ); ?>" class="td-btn td-btn-outline td-btn-lg"><?php esc_html_e( 'Meet Our Team', 'thedreamers' ); ?> &rarr;</a>
    </div>
  </div>
</section>

<?php get_footer();
