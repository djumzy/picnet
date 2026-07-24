<?php
/**
 * Template Name: Apply
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <div class="td-page-hero-overlay" style="background:var(--td-primary);position:absolute;inset:0;opacity:.97;"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Take the First Step', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Apply to PICKNET Programs', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Applications are open to youth aged 15–35 in Rwamwanja and surrounding communities. Women, persons with disabilities, and the most vulnerable are prioritized.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<section class="td-section td-bg-white">
  <div class="td-container td-container-md">

    <!-- Eligibility -->
    <div style="margin-bottom:3.5rem;">
      <h2><?php esc_html_e( 'Who Can Apply?', 'thedreamers' ); ?></h2>
      <div class="td-grid-2" style="gap:1.25rem;margin-top:1.5rem;">
        <?php
        $criteria = array(
          array( 'check' => true,  'text' => __( 'Youth aged 15–35 years', 'thedreamers' ) ),
          array( 'check' => true,  'text' => __( 'Resident in Rwamwanja Refugee Settlement or Kamwenge District', 'thedreamers' ) ),
          array( 'check' => true,  'text' => __( 'Willing to commit to the full 12-week CYSED program', 'thedreamers' ) ),
          array( 'check' => true,  'text' => __( 'Women, single mothers, and heads of household (prioritized)', 'thedreamers' ) ),
          array( 'check' => true,  'text' => __( 'Persons with disabilities (additional support available)', 'thedreamers' ) ),
          array( 'check' => false, 'text' => __( 'No prior formal education required', 'thedreamers' ) ),
        );
        foreach ( $criteria as $c ) : ?>
          <div style="display:flex;align-items:center;gap:.75rem;background:<?php echo $c['check'] ? 'rgba(26,92,56,.04)' : 'rgba(217,119,6,.06)'; ?>;border:1px solid <?php echo $c['check'] ? 'rgba(26,92,56,.15)' : 'rgba(217,119,6,.2)'; ?>;border-radius:.75rem;padding:1rem;">
            <span style="width:1.5rem;height:1.5rem;border-radius:50%;background:<?php echo $c['check'] ? 'var(--td-primary)' : 'var(--td-secondary)'; ?>;color:#fff;display:flex;align-items:center;justify-content:center;font-size:.7rem;flex-shrink:0;font-weight:800;">
              <?php echo $c['check'] ? '✓' : '★'; ?>
            </span>
            <p style="margin:0;font-size:.88rem;font-weight:600;"><?php echo esc_html( $c['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Process -->
    <div style="margin-bottom:3.5rem;">
      <h2><?php esc_html_e( 'How to Apply', 'thedreamers' ); ?></h2>
      <div style="display:flex;flex-direction:column;gap:1rem;margin-top:1.5rem;">
        <?php
        $steps = array(
          array( 'n' => '1', 'title' => __( 'Fill the Application Form', 'thedreamers' ),     'desc' => __( 'Complete the short online application form. It takes about 5 minutes.', 'thedreamers' ) ),
          array( 'n' => '2', 'title' => __( 'Interview / Needs Assessment', 'thedreamers' ),   'desc' => __( 'Our team will contact you within 5 business days to schedule a brief interview and assess which track suits you best.', 'thedreamers' ) ),
          array( 'n' => '3', 'title' => __( 'Receive Offer & Confirm Enrollment', 'thedreamers' ), 'desc' => __( 'Successful applicants receive an enrollment offer. Confirm your place and receive orientation details.', 'thedreamers' ) ),
          array( 'n' => '4', 'title' => __( 'Begin Training', 'thedreamers' ),                 'desc' => __( 'Attend the opening orientation and start your 12-week CYSED training journey.', 'thedreamers' ) ),
        );
        foreach ( $steps as $step ) : ?>
          <div style="display:flex;gap:1.25rem;align-items:flex-start;background:var(--td-light);border-radius:1rem;padding:1.25rem;">
            <span style="width:2.5rem;height:2.5rem;border-radius:50%;background:var(--td-primary);color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--td-font-heading);font-weight:800;flex-shrink:0;"><?php echo esc_html( $step['n'] ); ?></span>
            <div>
              <p style="font-weight:700;margin:0 0 .3rem;"><?php echo esc_html( $step['title'] ); ?></p>
              <p style="font-size:.87rem;color:var(--td-muted);margin:0;"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- CTA -->
    <div style="text-align:center;background:var(--td-primary);border-radius:1.5rem;padding:3rem;">
      <h2 style="color:#fff;margin-bottom:.75rem;"><?php esc_html_e( 'Ready to Apply?', 'thedreamers' ); ?></h2>
      <p style="color:rgba(255,255,255,.8);margin-bottom:2rem;"><?php esc_html_e( 'Click below to open the application form. New intakes open quarterly.', 'thedreamers' ); ?></p>
      <a href="<?php echo esc_url( td_opt( 'apply_form_url', 'https://forms.gle/s5cZg7GFVpFPG7dEA' ) ); ?>"
         class="td-btn td-btn-secondary td-btn-lg" target="_blank" rel="noopener noreferrer">
        <?php esc_html_e( 'Open Application Form ↗', 'thedreamers' ); ?>
      </a>
      <p style="color:rgba(255,255,255,.5);font-size:.78rem;margin-top:1rem;"><?php esc_html_e( 'The form opens in Google Forms. Free to complete, no account required.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<?php get_footer();
