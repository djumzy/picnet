<?php
/**
 * Template Name: Volunteer
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-sensitization.jpg' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Give Your Time', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Volunteer With PICKNET', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Your skills, time, and expertise can directly transform lives in Rwamwanja Refugee Settlement. Join our growing team of passionate volunteers.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'How You Can Help', 'thedreamers' ), __( 'Volunteer Opportunities', 'thedreamers' ), __( 'We welcome skilled volunteers in the following areas. Remote and in-person opportunities available.', 'thedreamers' ), true ); ?>
    <div class="td-grid-3" style="gap:1.5rem;">
      <?php
      $roles = array(
        array( 'icon' => '💻', 'title' => __( 'ICT & Digital Skills Training', 'thedreamers' ),       'desc' => __( 'Teach digital literacy, coding, or graphic design remotely or in-person at our Digital Hub.', 'thedreamers' ), 'type' => __( 'Remote & In-person', 'thedreamers' ) ),
        array( 'icon' => '📊', 'title' => __( 'Business Mentorship', 'thedreamers' ),                  'desc' => __( 'Guide PICKNET graduates in developing business plans, financial management, and market strategies.', 'thedreamers' ), 'type' => __( 'Remote', 'thedreamers' ) ),
        array( 'icon' => '✍', 'title' => __( 'Grant Writing & Fundraising', 'thedreamers' ),          'desc' => __( 'Help PICKNET secure funding by writing grant proposals and donor reports.', 'thedreamers' ), 'type' => __( 'Remote', 'thedreamers' ) ),
        array( 'icon' => '📣', 'title' => __( 'Communications & Social Media', 'thedreamers' ),        'desc' => __( 'Create content, manage social accounts, and amplify PICKNET\'s stories globally.', 'thedreamers' ), 'type' => __( 'Remote', 'thedreamers' ) ),
        array( 'icon' => '🌱', 'title' => __( 'Agribusiness & Food Security', 'thedreamers' ),         'desc' => __( 'Support agribusiness training and food security programs in Rwamwanja communities.', 'thedreamers' ), 'type' => __( 'In-person (Uganda)', 'thedreamers' ) ),
        array( 'icon' => '👶', 'title' => __( 'Child Protection & Psychosocial Support', 'thedreamers' ),'desc' => __( 'Trained counsellors and child development specialists support the Kids Network program.', 'thedreamers' ), 'type' => __( 'In-person (Uganda)', 'thedreamers' ) ),
      );
      foreach ( $roles as $role ) : ?>
        <div class="td-card">
          <div class="td-card-body">
            <div style="font-size:1.75rem;margin-bottom:.75rem;"><?php echo $role['icon']; // phpcs:ignore ?></div>
            <span class="td-tag" style="margin-bottom:.75rem;display:inline-block;"><?php echo esc_html( $role['type'] ); ?></span>
            <h3 style="font-size:1rem;margin-bottom:.5rem;"><?php echo esc_html( $role['title'] ); ?></h3>
            <p style="font-size:.87rem;color:var(--td-muted);"><?php echo esc_html( $role['desc'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Ready to Volunteer?', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.8);max-width:560px;margin:0 auto 2rem;"><?php esc_html_e( 'Fill out our volunteer application form and our team will be in touch within 5 business days.', 'thedreamers' ); ?></p>
    <a href="<?php echo esc_url( td_opt( 'volunteer_form', 'https://forms.gle/9MbhCQTE5HEe7Utj7' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer">
      <?php esc_html_e( 'Apply to Volunteer ↗', 'thedreamers' ); ?>
    </a>
  </div>
</section>

<?php get_footer();
