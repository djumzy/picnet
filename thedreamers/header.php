<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#1a5c38">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#td-main-content"><?php esc_html_e( 'Skip to content', 'thedreamers' ); ?></a>

<!-- ═══════════════════════════════════════════════════════════════
     NAVIGATION
     ═══════════════════════════════════════════════════════════════ -->
<header class="td-nav" role="banner">
  <div class="td-container">
    <div class="td-nav-inner">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="td-nav-logo" rel="home">
        <?php if ( has_custom_logo() ) :
          the_custom_logo();
        else : ?>
          <img src="<?php echo esc_url( THEDREAMERS_URI . '/assets/images/picknet-logo.jpg' ); ?>"
               alt="<?php bloginfo( 'name' ); ?>" width="44" height="44">
        <?php endif; ?>
        <span class="td-nav-logo-text"><?php bloginfo( 'name' ); ?></span>
      </a>

      <!-- Desktop nav -->
      <nav role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'thedreamers' ); ?>">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'td-nav-menu',
          'container'      => false,
          'fallback_cb'    => 'thedreamers_fallback_menu',
        ) );
        ?>
      </nav>

      <!-- Donate CTA -->
      <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>"
         class="td-btn td-btn-secondary td-nav-cta"
         target="_blank" rel="noopener noreferrer">
        <?php esc_html_e( 'Donate Now', 'thedreamers' ); ?>
      </a>

      <!-- Hamburger -->
      <button class="td-nav-toggle" id="td-nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'thedreamers' ); ?>" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

    </div><!-- .td-nav-inner -->
  </div><!-- .td-container -->

  <!-- Mobile menu -->
  <div class="td-mobile-menu" id="td-mobile-menu" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'thedreamers' ); ?>">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class'     => '',
      'container'      => false,
      'fallback_cb'    => 'thedreamers_fallback_menu',
    ) );
    ?>
    <div style="padding: .75rem 1rem;">
      <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>"
         class="td-btn td-btn-secondary" style="width:100%; justify-content:center;"
         target="_blank" rel="noopener noreferrer">
        <?php esc_html_e( 'Donate Now', 'thedreamers' ); ?>
      </a>
    </div>
  </div>

</header><!-- .td-nav -->

<main id="td-main-content">
<?php

/**
 * Fallback nav menu — outputs all created pages.
 */
function thedreamers_fallback_menu() {
    $pages = array(
        'home'         => __( 'Home', 'thedreamers' ),
        'about'        => __( 'About', 'thedreamers' ),
        'approach'     => __( 'Our Approach', 'thedreamers' ),
        'programs'     => __( 'Programs', 'thedreamers' ),
        'kids-network' => __( 'Kids Network', 'thedreamers' ),
        'team'         => __( 'Team', 'thedreamers' ),
        'volunteer'    => __( 'Volunteer', 'thedreamers' ),
        'blog'         => __( 'Blog', 'thedreamers' ),
        'contact'      => __( 'Contact', 'thedreamers' ),
    );
    echo '<ul class="td-nav-menu">';
    foreach ( $pages as $slug => $label ) {
        $page = get_page_by_path( $slug );
        if ( $page ) {
            echo '<li><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( $label ) . '</a></li>';
        }
    }
    $academy_url = td_opt( 'academy_url', 'https://picknet.org/academy/' );
    echo '<li><a href="' . esc_url( $academy_url ) . '" target="_blank" rel="noopener noreferrer">' . esc_html__( 'Academy ↗', 'thedreamers' ) . '</a></li>';
    echo '</ul>';
}
