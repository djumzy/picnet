<?php
/**
 * Template Name: Programs
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/digital-skills.png' ); ?>" alt="" aria-hidden="true">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'What We Do', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Our Programs', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Eight integrated programs addressing livelihoods, digital access, child protection, and community enterprise across Rwamwanja Refugee Settlement.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<section class="td-section td-bg-white">
  <div class="td-container">
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:2rem;">
      <?php
      $programs = array(
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/skilling.jpg',
          'tag'   => __( 'Livelihoods', 'thedreamers' ),
          'title' => __( 'Market Hub', 'thedreamers' ),
          'desc'  => __( 'A one-stop business development centre where PICKNET graduates and community entrepreneurs access market linkages, sales platforms, financial planning, and legal guidance to launch and grow sustainable businesses.', 'thedreamers' ),
          'stats' => array( '92+' => __( 'Businesses', 'thedreamers' ), '60%+' => __( 'Women-owned', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/digital-skills.png',
          'tag'   => __( 'Digital', 'thedreamers' ),
          'title' => __( 'Creative Youth Hub', 'thedreamers' ),
          'desc'  => __( 'A digital innovation and creative space equipping young people with graphic design, digital media, content creation, and entrepreneurship skills — building the next generation of refugee-led digital creators.', 'thedreamers' ),
          'stats' => array( '200+' => __( 'Youth Reached', 'thedreamers' ), '40%' => __( 'Female', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/tailoring.png',
          'tag'   => __( 'Academy', 'thedreamers' ),
          'title' => __( 'CYSED Program', 'thedreamers' ),
          'desc'  => __( 'Community Youth Skills and Enterprise Development — PICKNET\'s flagship 12-week training program offering 12 vocational and digital tracks. Graduates receive certified skills and business mentorship.', 'thedreamers' ),
          'stats' => array( '1,157+' => __( 'Graduates', 'thedreamers' ), '12' => __( 'Tracks', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/practical-knitting.jpg',
          'tag'   => __( 'Skills', 'thedreamers' ),
          'title' => __( 'Vocational Training', 'thedreamers' ),
          'desc'  => __( 'Practical, hands-on vocational training in tailoring, knitting, agribusiness, carpentry, and more — building market-ready skills for sustained employment or self-employment in refugee communities.', 'thedreamers' ),
          'stats' => array( '600+' => __( 'Trained', 'thedreamers' ), '46%' => __( 'Women', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/agribusiness.jpg',
          'tag'   => __( 'Finance', 'thedreamers' ),
          'title' => __( 'VELAs Program', 'thedreamers' ),
          'desc'  => __( 'Village Enterprise Learning Associations provide community savings groups, micro-credit access, and financial literacy training — putting economic tools in the hands of women and youth who banks have left behind.', 'thedreamers' ),
          'stats' => array( '40+' => __( 'VELAs', 'thedreamers' ), '1,500+' => __( 'Members', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/digital-skills.png',
          'tag'   => __( 'Technology', 'thedreamers' ),
          'title' => __( 'Digital Hub', 'thedreamers' ),
          'desc'  => __( 'An ICT and e-learning centre bridging the digital divide — providing computer access, digital literacy training, online learning resources, and AI-integrated skill building for community members.', 'thedreamers' ),
          'stats' => array( '300+' => __( 'Users / Year', 'thedreamers' ), '60+' => __( 'Devices', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/kids.png',
          'tag'   => __( 'Child Protection', 'thedreamers' ),
          'title' => __( 'Kids Network', 'thedreamers' ),
          'desc'  => __( 'A child protection program providing safe spaces, psychosocial support, remedial education, and rehabilitation for street-connected, abandoned, and vulnerable children in Rwamwanja.', 'thedreamers' ),
          'stats' => array( '150+' => __( 'Children Reached', 'thedreamers' ), '3' => __( 'Safe Spaces', 'thedreamers' ) ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/community-discussion.jpg',
          'tag'   => __( 'Leadership', 'thedreamers' ),
          'title' => __( 'Youth Leadership', 'thedreamers' ),
          'desc'  => __( 'A governance and civic leadership program developing the next generation of community advocates, peer educators, and change-makers who can represent refugee voices at local and national levels.', 'thedreamers' ),
          'stats' => array( '80+' => __( 'Leaders Trained', 'thedreamers' ), '50%' => __( 'Women', 'thedreamers' ) ),
        ),
      );
      foreach ( $programs as $p ) : ?>
        <div class="td-program-card">
          <div class="td-program-card-img">
            <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" loading="lazy">
            <span class="td-program-card-tag"><?php echo esc_html( $p['tag'] ); ?></span>
          </div>
          <div class="td-program-card-body">
            <h3><?php echo esc_html( $p['title'] ); ?></h3>
            <p><?php echo esc_html( $p['desc'] ); ?></p>
            <?php if ( ! empty( $p['stats'] ) ) : ?>
              <div style="display:flex;gap:1.25rem;margin-bottom:1rem;">
                <?php foreach ( $p['stats'] as $val => $lbl ) : ?>
                  <div>
                    <span style="font-family:var(--td-font-heading);font-size:1.25rem;font-weight:800;color:var(--td-primary);"><?php echo esc_html( $val ); ?></span>
                    <p style="font-size:.72rem;color:var(--td-muted);margin:0;text-transform:uppercase;letter-spacing:.06em;font-weight:700;"><?php echo esc_html( $lbl ); ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <a href="<?php echo esc_url( td_opt( 'apply_form_url', 'https://forms.gle/s5cZg7GFVpFPG7dEA' ) ); ?>" class="td-btn td-btn-primary" target="_blank" rel="noopener noreferrer">
              <?php esc_html_e( 'Apply for This Program', 'thedreamers' ); ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section style="background:var(--td-primary);padding:4rem 0;text-align:center;">
  <div class="td-container">
    <h2 style="color:#fff;margin-bottom:1rem;"><?php esc_html_e( 'Apply to a PICKNET Program', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.8);max-width:560px;margin:0 auto 2rem;"><?php esc_html_e( 'Applications are open to youth aged 15–35 in Rwamwanja and surrounding communities. Women, persons with disabilities, and the most vulnerable are prioritized.', 'thedreamers' ); ?></p>
    <a href="<?php echo esc_url( td_opt( 'apply_form_url', 'https://forms.gle/s5cZg7GFVpFPG7dEA' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer">
      <?php esc_html_e( 'Apply Now ↗', 'thedreamers' ); ?>
    </a>
  </div>
</section>

<?php get_footer();
