</main><!-- #td-main-content -->

<!-- ═══════════════════════════════════════════════════════════════
     FOOTER
     ═══════════════════════════════════════════════════════════════ -->
<footer class="td-footer" role="contentinfo">
  <div class="td-footer-main">
    <div class="td-container">
      <div class="td-footer-grid">

        <!-- Column 1 — Brand -->
        <div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="td-footer-logo">
            <?php if ( has_custom_logo() ) :
              the_custom_logo();
            else : ?>
              <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/picknet-logo.jpg' ); ?>"
                   alt="<?php bloginfo( 'name' ); ?>" width="52" height="52">
            <?php endif; ?>
            <div class="td-footer-logo-text">
              <h3><?php bloginfo( 'name' ); ?></h3>
              <p><?php esc_html_e( 'Refugee-Led. Innovation-Driven. Future-Bound.', 'thedreamers' ); ?></p>
            </div>
          </a>
          <p class="td-footer-about-text">
            <?php esc_html_e( 'Poverty, Injustice Consultancy and Kids Network. A refugee-led community development organization empowering youth and women in Uganda\'s Rwamwanja Refugee Settlement.', 'thedreamers' ); ?>
          </p>
          <blockquote class="td-footer-quote">
            <?php esc_html_e( '"At PICKNET, we believe sustainable change begins with empowered youth, supported women, and protected children."', 'thedreamers' ); ?>
          </blockquote>

          <!-- Social Links -->
          <p class="td-footer-social-label"><?php esc_html_e( 'Follow PICKNET', 'thedreamers' ); ?></p>
          <div class="td-social-links">
            <?php
            $socials = array(
              'linkedin'  => array( 'label' => 'LinkedIn',    'url' => td_opt( 'social_linkedin',  'https://www.linkedin.com/company/picknet/' ),
                'svg' => '<path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/>' ),
              'instagram' => array( 'label' => 'Instagram',   'url' => td_opt( 'social_instagram', 'https://www.instagram.com/picknet55' ),
                'svg' => '<rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01" fill="none" stroke="currentColor" stroke-width="2"/>' ),
              'facebook'  => array( 'label' => 'Facebook',    'url' => td_opt( 'social_facebook',  'https://www.facebook.com/share/1GWnkt2gRo/' ),
                'svg' => '<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>' ),
              'twitter'   => array( 'label' => 'X (Twitter)', 'url' => td_opt( 'social_twitter',   'https://x.com/picknet5' ),
                'svg' => '<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"/>' ),
              'youtube'   => array( 'label' => 'YouTube',     'url' => td_opt( 'social_youtube',   'https://youtube.com/@picknetorg' ),
                'svg' => '<path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.4a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/>' ),
            );
            foreach ( $socials as $key => $s ) :
              if ( ! $s['url'] ) continue;
            ?>
              <a href="<?php echo esc_url( $s['url'] ); ?>" class="td-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( $s['label'] ); ?>">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><?php echo $s['svg']; // phpcs:ignore WordPress.Security.EscapeOutput ?></svg>
              </a>
            <?php endforeach; ?>
          </div>
        </div><!-- /col 1 -->

        <!-- Column 2 — Quick Links -->
        <div>
          <h4 class="td-footer-title"><?php esc_html_e( 'Quick Links', 'thedreamers' ); ?></h4>
          <ul class="td-footer-links">
            <?php
            $links = array(
              'about'        => __( 'About Us', 'thedreamers' ),
              'approach'     => __( 'Our Approach', 'thedreamers' ),
              'programs'     => __( 'Programs', 'thedreamers' ),
              'kids-network' => __( 'Kids Network', 'thedreamers' ),
              'team'         => __( 'Our Team', 'thedreamers' ),
              'blog'         => __( 'Blog & Stories', 'thedreamers' ),
              'resources'    => __( 'Resources & Transparency', 'thedreamers' ),
              'volunteer'    => __( 'Volunteer', 'thedreamers' ),
              'partner'      => __( 'Partner With Us', 'thedreamers' ),
              'faq'          => __( 'FAQ', 'thedreamers' ),
              'contact'      => __( 'Contact', 'thedreamers' ),
            );
            foreach ( $links as $slug => $label ) :
              $page = get_page_by_path( $slug );
              if ( $page ) :
            ?>
              <li><a href="<?php echo esc_url( get_permalink( $page->ID ) ); ?>"><?php echo esc_html( $label ); ?></a></li>
            <?php
              endif;
            endforeach;
            ?>
            <li>
              <a href="<?php echo esc_url( td_opt( 'academy_url', 'https://picknet.org/academy/' ) ); ?>"
                 target="_blank" rel="noopener noreferrer">
                <?php esc_html_e( 'Academy ↗', 'thedreamers' ); ?>
              </a>
            </li>
          </ul>
        </div><!-- /col 2 -->

        <!-- Column 3 — Contact -->
        <div>
          <h4 class="td-footer-title"><?php esc_html_e( 'Contact Us', 'thedreamers' ); ?></h4>
          <address class="td-footer-contact" style="font-style:normal;">

            <div class="td-footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span><?php echo esc_html( td_opt( 'org_address', 'Rwamwanja Refugee Settlement, Kamwenge District, Uganda' ) ); ?><br>P.O. Box 209941 Kampala GPO</span>
            </div>

            <div class="td-footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <div>
                <a href="mailto:<?php echo esc_attr( td_opt( 'org_email', 'info@picknet.org' ) ); ?>">
                  <?php echo esc_html( td_opt( 'org_email', 'info@picknet.org' ) ); ?>
                </a><br>
                <a href="mailto:<?php echo esc_attr( td_opt( 'org_email2', 'orgpicknet@gmail.com' ) ); ?>">
                  <?php echo esc_html( td_opt( 'org_email2', 'orgpicknet@gmail.com' ) ); ?>
                </a>
              </div>
            </div>

            <div class="td-footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              <a href="tel:<?php echo esc_attr( str_replace( ' ', '', td_opt( 'org_phone', '+256770859427' ) ) ); ?>">
                <?php echo esc_html( td_opt( 'org_phone', '+256 770 859 427' ) ); ?>
              </a>
            </div>

            <div style="padding-top:.75rem; border-top:1px solid rgba(255,255,255,.1); margin-top:.75rem;">
              <p style="font-size:.75rem; color:rgba(255,255,255,.45); margin:0;">
                <?php esc_html_e( 'Registered with URSB (June 21, 2018)', 'thedreamers' ); ?>
              </p>
            </div>
          </address>
        </div><!-- /col 3 -->

      </div><!-- .td-footer-grid -->

      <!-- Map -->
      <div class="td-footer-map">
        <h4>
          <svg style="display:inline;vertical-align:middle;margin-right:.4rem" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <?php esc_html_e( 'Find Us — Rwamwanja Refugee Settlement, Uganda', 'thedreamers' ); ?>
        </h4>
        <iframe
          title="<?php esc_attr_e( 'PICKNET Location', 'thedreamers' ); ?>"
          src="https://maps.google.com/maps?q=Rwamwanja+Refugee+Settlement,+Kamwenge,+Uganda&hl=en&z=14&output=embed"
          width="100%" height="260" style="border:0;display:block;border-radius:.75rem;"
          allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <p style="font-size:.75rem;color:rgba(255,255,255,.4);margin-top:.5rem;">
          <?php esc_html_e( 'Rwamwanja Refugee Settlement · Kamwenge District · Western Uganda', 'thedreamers' ); ?>
        </p>
      </div>

    </div><!-- .td-container -->
  </div><!-- .td-footer-main -->

  <!-- Bottom bar -->
  <div class="td-footer-bottom">
    <div class="td-container">
      <div class="td-footer-bottom-inner">
        <p style="margin:0">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'thedreamers' ); ?></p>
        <p style="margin:0">
          <?php esc_html_e( 'Developed by', 'thedreamers' ); ?>
          <span style="color:var(--td-secondary);font-weight:700;"><?php esc_html_e( 'The Dreamers', 'thedreamers' ); ?></span>
          &mdash;
          <a href="tel:+256787007542">0787 007 542</a>
          &middot;
          <a href="mailto:info@thedreamers.org">info@thedreamers.org</a>
        </p>
      </div>
    </div>
  </div>

</footer><!-- .td-footer -->

<?php wp_footer(); ?>
</body>
</html>
