<?php
/**
 * Template Name: Our Team
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-sensitization.jpg' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'The People', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Our Team', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Refugee-led and community-rooted — our team is made up of the same people we serve. Their lived experience drives everything we do.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Org Structure -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'Governance', 'thedreamers' ), __( 'Organizational Structure', 'thedreamers' ), '', true ); ?>
    <div style="max-width:900px;margin:0 auto;">
      <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/org-structure.png' ); ?>" alt="<?php esc_attr_e( 'PICKNET Organizational Structure', 'thedreamers' ); ?>" style="width:100%;border-radius:1rem;box-shadow:var(--td-shadow);">
    </div>
  </div>
</section>

<!-- Team Grid -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading( __( 'Meet the Team', 'thedreamers' ), __( 'Leadership & Staff', 'thedreamers' ), __( 'A dedicated team of refugees, local professionals, and community advocates working together to build a better future.', 'thedreamers' ), true ); ?>

    <div class="td-grid-4" style="gap:1.5rem;">
      <?php
      $team = array(
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-boniface-ahishakiye.png',
          'name' => 'Boniface AHISHAKIYE',
          'role' => __( 'Board Chairperson & Founder', 'thedreamers' ),
          'bio'  => __( 'Visionary co-founder who shaped PICKNET from a grassroots idea into a registered community development organization serving thousands of refugees in Rwamwanja, Uganda.', 'thedreamers' ),
        ),
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-kobusinge-joselyne.png',
          'name' => 'KOBUSINGE Joselyne',
          'role' => __( 'Executive Director & Founder', 'thedreamers' ),
          'bio'  => __( 'Executive Director driving PICKNET\'s operational excellence, fundraising strategy, and strategic partnerships. A relentless advocate for women\'s economic dignity in displacement contexts.', 'thedreamers' ),
        ),
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-ivone-nyinawumuntu.png',
          'name' => 'Ivone NYINAWUMUNTU',
          'role' => __( 'Head of Programs & Impacts', 'thedreamers' ),
          'bio'  => __( 'Oversees all program delivery and impact measurement across PICKNET\'s thematic areas — ensuring every initiative reaches its intended beneficiaries with measurable, lasting results.', 'thedreamers' ),
        ),
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-allian-tumukunde.png',
          'name' => 'Allian TUMUKUNDE',
          'role' => __( 'Finance & Compliance Manager', 'thedreamers' ),
          'bio'  => __( 'Manages financial integrity, donor compliance, and internal controls for all PICKNET operations. Ensures 90%+ of funds reach programs directly.', 'thedreamers' ),
        ),
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-aoron-mfitumukiza.png',
          'name' => 'Aoron MFITUMUKIZA',
          'role' => __( 'MEL Specialist', 'thedreamers' ),
          'bio'  => __( 'Leads PICKNET\'s Monitoring, Evaluation & Learning framework — turning community data into evidence that drives program quality and donor trust.', 'thedreamers' ),
        ),
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-kemigisha-jamirah.png',
          'name' => 'KEMIGISHA Jamirah',
          'role' => __( 'ICT / E-Learning Manager', 'thedreamers' ),
          'bio'  => __( 'Drives PICKNET\'s digital transformation — managing ICT infrastructure, e-learning platforms, and the technology integration powering the CYSED Academy.', 'thedreamers' ),
        ),
        array(
          'img'  => THEDREAMERS_URI . '/assets/images/team-tweteise-alex.png',
          'name' => 'TWETEISE Alex',
          'role' => __( 'Communications Manager', 'thedreamers' ),
          'bio'  => __( 'Shapes PICKNET\'s voice and visibility — managing communications, digital media, and brand presence to amplify the stories of refugee-led innovation.', 'thedreamers' ),
        ),
      );
      foreach ( $team as $member ) : ?>
        <div class="td-team-card">
          <img src="<?php echo esc_url( $member['img'] ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" loading="lazy">
          <div class="td-team-card-body">
            <p class="td-team-card-name"><?php echo esc_html( $member['name'] ); ?></p>
            <p class="td-team-card-role"><?php echo esc_html( $member['role'] ); ?></p>
            <p class="td-team-card-bio"><?php echo esc_html( $member['bio'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Join the Team -->
<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Join Our Team', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.8);max-width:560px;margin:0 auto 2rem;"><?php esc_html_e( 'We welcome passionate volunteers, mentors, and professionals ready to contribute their skills to refugee-led development.', 'thedreamers' ); ?></p>
    <a href="<?php echo esc_url( td_opt( 'volunteer_form', 'https://forms.gle/9MbhCQTE5HEe7Utj7' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer">
      <?php esc_html_e( 'Volunteer With Us ↗', 'thedreamers' ); ?>
    </a>
  </div>
</section>

<?php get_footer();
