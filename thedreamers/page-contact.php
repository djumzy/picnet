<?php
/**
 * Template Name: Contact & Donate
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
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Join the Movement', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Be Part of the Change', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Your support — whether financial, through partnership, or expertise — directly transforms lives in Rwamwanja.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Impact Strip -->
<section style="padding:3.5rem 0;background:#fff;border-bottom:1px solid var(--td-border);">
  <div class="td-container">
    <div class="td-grid-4" style="text-align:center;gap:1.25rem;">
      <?php
      $impacts = array(
        array( 'action' => __( 'Train a youth', 'thedreamers' ),        'impact' => __( 'with employable vocational and digital skills', 'thedreamers' ) ),
        array( 'action' => __( 'Launch a business', 'thedreamers' ),    'impact' => __( 'and help a family achieve economic independence', 'thedreamers' ) ),
        array( 'action' => __( 'Protect a child', 'thedreamers' ),      'impact' => __( 'by funding safe spaces and safeguarding programs', 'thedreamers' ) ),
        array( 'action' => __( 'Strengthen a community', 'thedreamers' ),'impact' => __( 'through VELAs, mentorship, and market access', 'thedreamers' ) ),
      );
      foreach ( $impacts as $item ) : ?>
        <div style="background:var(--td-light);border-radius:1rem;padding:1.5rem;">
          <p style="font-weight:700;color:var(--td-primary);font-size:1.05rem;margin-bottom:.4rem;"><?php echo esc_html( $item['action'] ); ?></p>
          <p style="font-size:.87rem;color:var(--td-muted);margin:0;"><?php echo esc_html( $item['impact'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Main Contact Section -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <div style="display:grid;grid-template-columns:1fr 2fr;gap:3rem;max-width:1000px;margin:0 auto;">

      <!-- Contact Info -->
      <div>
        <h2><?php esc_html_e( 'Get in Touch', 'thedreamers' ); ?></h2>
        <p style="color:var(--td-muted);"><?php esc_html_e( 'We are an open, transparent organization. Whether you want to donate, partner, or simply learn more — we welcome the conversation.', 'thedreamers' ); ?></p>

        <div style="display:flex;flex-direction:column;gap:1.25rem;margin-top:1.75rem;">
          <div class="td-contact-info-item">
            <div class="td-contact-info-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p style="font-weight:700;margin:0 0 .2rem;"><?php esc_html_e( 'Location', 'thedreamers' ); ?></p>
              <p style="font-size:.87rem;color:var(--td-muted);margin:0;"><?php echo esc_html( td_opt( 'org_address', 'Rwamwanja Refugee Settlement, Kamwenge District, Uganda' ) ); ?></p>
            </div>
          </div>
          <div class="td-contact-info-item">
            <div class="td-contact-info-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <p style="font-weight:700;margin:0 0 .2rem;"><?php esc_html_e( 'Email', 'thedreamers' ); ?></p>
              <a href="mailto:<?php echo esc_attr( td_opt( 'org_email', 'info@picknet.org' ) ); ?>" style="font-size:.87rem;display:block;"><?php echo esc_html( td_opt( 'org_email', 'info@picknet.org' ) ); ?></a>
              <a href="mailto:<?php echo esc_attr( td_opt( 'org_email2', 'orgpicknet@gmail.com' ) ); ?>" style="font-size:.87rem;color:var(--td-muted);display:block;"><?php echo esc_html( td_opt( 'org_email2', 'orgpicknet@gmail.com' ) ); ?></a>
            </div>
          </div>
          <div class="td-contact-info-item">
            <div class="td-contact-info-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </div>
            <div>
              <p style="font-weight:700;margin:0 0 .2rem;"><?php esc_html_e( 'Phone / WhatsApp', 'thedreamers' ); ?></p>
              <a href="tel:+<?php echo esc_attr( td_opt( 'org_whatsapp', '256740997528' ) ); ?>" style="font-size:.87rem;">
                <?php echo esc_html( td_opt( 'org_phone', '+256 770 859 427' ) ); ?>
              </a>
            </div>
          </div>
        </div>

        <div style="margin-top:1.5rem;border-radius:1rem;overflow:hidden;box-shadow:var(--td-shadow);">
          <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/community-awareness.jpg' ); ?>" alt="" style="width:100%;height:180px;object-fit:cover;">
        </div>

        <div style="background:rgba(26,92,56,.05);border:1px solid rgba(26,92,56,.15);border-radius:1rem;padding:1.25rem;margin-top:1.25rem;">
          <p style="font-weight:700;color:var(--td-primary);margin:0 0 .4rem;"><?php esc_html_e( 'Registered & Trusted', 'thedreamers' ); ?></p>
          <p style="font-size:.82rem;color:var(--td-muted);margin:0;"><?php esc_html_e( 'Registered with URSB since June 21, 2018. 90% of all funds go directly to programs.', 'thedreamers' ); ?></p>
        </div>
      </div>

      <!-- Forms -->
      <div>
        <!-- Tab Toggle -->
        <div style="display:flex;background:var(--td-light);border-radius:.75rem;padding:.3rem;margin-bottom:2rem;" role="tablist">
          <button class="td-tab-btn active" data-tab="donate" style="flex:1;padding:.75rem;border:none;border-radius:.5rem;cursor:pointer;font-weight:700;font-size:.9rem;background:#fff;color:var(--td-primary);box-shadow:0 1px 4px rgba(0,0,0,.08);" role="tab" aria-selected="true">
            ♥ <?php esc_html_e( 'Donate', 'thedreamers' ); ?>
          </button>
          <button class="td-tab-btn" data-tab="partner" style="flex:1;padding:.75rem;border:none;border-radius:.5rem;cursor:pointer;font-weight:700;font-size:.9rem;background:transparent;color:var(--td-muted);" role="tab" aria-selected="false">
            ✦ <?php esc_html_e( 'Partner With Us', 'thedreamers' ); ?>
          </button>
        </div>

        <!-- Donate Tab -->
        <div class="td-tab-panel" id="tab-donate">
          <h3><?php esc_html_e( 'Support Our Mission', 'thedreamers' ); ?></h3>
          <p style="color:var(--td-muted);"><?php esc_html_e( 'Every dollar you give trains a youth, supports a woman entrepreneur, or protects a child. Donations are processed securely through PayPal — no account required.', 'thedreamers' ); ?></p>
          <div class="td-amount-grid" style="margin:1.5rem 0;">
            <?php
            $amounts = array(
              array( 'amount' => '$25',  'label' => __( 'Train a Youth', 'thedreamers' ) ),
              array( 'amount' => '$50',  'label' => __( 'Skill a Woman', 'thedreamers' ) ),
              array( 'amount' => '$100', 'label' => __( 'Launch a Business', 'thedreamers' ) ),
              array( 'amount' => '$250', 'label' => __( 'Establish a VELA', 'thedreamers' ) ),
            );
            foreach ( $amounts as $a ) : ?>
              <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>" class="td-amount-card" target="_blank" rel="noopener noreferrer">
                <p class="td-amount-value"><?php echo esc_html( $a['amount'] ); ?></p>
                <p class="td-amount-label"><?php echo esc_html( $a['label'] ); ?></p>
              </a>
            <?php endforeach; ?>
          </div>
          <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>"
             class="td-btn td-btn-secondary td-btn-lg" style="width:100%;justify-content:center;"
             target="_blank" rel="noopener noreferrer">
            ♥ <?php esc_html_e( 'Donate Now via PayPal', 'thedreamers' ); ?>
          </a>
          <p style="font-size:.78rem;color:var(--td-muted);text-align:center;margin-top:.75rem;"><?php esc_html_e( 'Secure payment via PayPal. You can donate with or without a PayPal account.', 'thedreamers' ); ?></p>
        </div>

        <!-- Partner Tab -->
        <div class="td-tab-panel" id="tab-partner" style="display:none;">
          <h3><?php esc_html_e( 'Partnership Inquiry', 'thedreamers' ); ?></h3>
          <p style="color:var(--td-muted);"><?php esc_html_e( 'We welcome NGOs, donors, private sector companies, and individuals ready to co-create lasting impact. Fill out our partnership inquiry form and we\'ll respond within 3 business days.', 'thedreamers' ); ?></p>
          <div class="td-grid-2" style="margin:1.5rem 0;gap:1rem;">
            <?php
            $types = array( __( 'Funding & Grants', 'thedreamers' ), __( 'Market Linkages', 'thedreamers' ), __( 'Technical Assistance', 'thedreamers' ), __( 'Mentorship & Coaching', 'thedreamers' ), __( 'Procurement', 'thedreamers' ), __( 'Research & Learning', 'thedreamers' ) );
            foreach ( $types as $type ) : ?>
              <div style="background:var(--td-light);border-radius:.75rem;padding:1rem;">
                <p style="font-weight:700;font-size:.87rem;margin:0;"><?php echo esc_html( $type ); ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <a href="<?php echo esc_url( td_opt( 'partner_form', 'https://forms.gle/Jt2Fm4AvfwbpCzWs9' ) ); ?>"
             class="td-btn td-btn-primary td-btn-lg" style="width:100%;justify-content:center;"
             target="_blank" rel="noopener noreferrer">
            <?php esc_html_e( 'Open Partnership Form ↗', 'thedreamers' ); ?>
          </a>
          <p style="font-size:.78rem;color:var(--td-muted);text-align:center;margin-top:.75rem;"><?php esc_html_e( 'You\'ll be taken to a Google Form. We review every inquiry personally.', 'thedreamers' ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  var btns   = document.querySelectorAll('.td-tab-btn');
  var panels = document.querySelectorAll('.td-tab-panel');
  btns.forEach(function(btn){
    btn.addEventListener('click', function(){
      var tab = btn.dataset.tab;
      btns.forEach(function(b){
        b.style.background = 'transparent';
        b.style.color      = 'var(--td-muted)';
        b.style.boxShadow  = 'none';
        b.setAttribute('aria-selected','false');
      });
      btn.style.background = '#fff';
      btn.style.color      = 'var(--td-primary)';
      btn.style.boxShadow  = '0 1px 4px rgba(0,0,0,.08)';
      btn.setAttribute('aria-selected','true');
      panels.forEach(function(p){ p.style.display = 'none'; });
      var panel = document.getElementById('tab-' + tab);
      if(panel) panel.style.display = 'block';
    });
  });
})();
</script>

<?php get_footer();
