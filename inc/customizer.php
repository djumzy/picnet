<?php
/**
 * THEDREAMERS — WordPress Customizer Settings
 *
 * @package TheDreamers
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function thedreamers_customizer( $wp_customize ) {

    /* ═══════════════════════════════════════════════════════════
     * PANEL: PICKNET Theme Options
     * ═══════════════════════════════════════════════════════════ */
    $wp_customize->add_panel( 'thedreamers_panel', array(
        'title'    => __( 'PICKNET Theme Options', 'thedreamers' ),
        'priority' => 30,
    ) );

    /* ── Section: Colors ───────────────────────────────────────── */
    $wp_customize->add_section( 'thedreamers_colors', array(
        'title' => __( 'Brand Colors', 'thedreamers' ),
        'panel' => 'thedreamers_panel',
    ) );

    $color_settings = array(
        'primary_color'   => array( 'label' => __( 'Primary Color (Green)', 'thedreamers' ), 'default' => '#1a5c38' ),
        'secondary_color' => array( 'label' => __( 'Secondary Color (Amber)', 'thedreamers' ), 'default' => '#d97706' ),
        'dark_color'      => array( 'label' => __( 'Dark Text Color', 'thedreamers' ), 'default' => '#0f1f14' ),
    );
    foreach ( $color_settings as $key => $args ) {
        $wp_customize->add_setting( $key, array( 'default' => $args['default'], 'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'postMessage' ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
            'label'   => $args['label'],
            'section' => 'thedreamers_colors',
        ) ) );
    }

    /* ── Section: Organization Info ────────────────────────────── */
    $wp_customize->add_section( 'thedreamers_org_info', array(
        'title' => __( 'Organization Info', 'thedreamers' ),
        'panel' => 'thedreamers_panel',
    ) );

    $text_settings = array(
        'org_phone'       => array( 'label' => __( 'Phone Number', 'thedreamers' ),    'default' => '+256 770 859 427' ),
        'org_email'       => array( 'label' => __( 'Primary Email', 'thedreamers' ),   'default' => 'info@picknet.org' ),
        'org_email2'      => array( 'label' => __( 'Secondary Email', 'thedreamers' ), 'default' => 'orgpicknet@gmail.com' ),
        'org_address'     => array( 'label' => __( 'Address', 'thedreamers' ),         'default' => 'Rwamwanja Refugee Settlement, Kamwenge District, Uganda' ),
        'org_whatsapp'    => array( 'label' => __( 'WhatsApp Number (digits only, e.g. 256740997528)', 'thedreamers' ), 'default' => '256740997528' ),
        'donate_url'      => array( 'label' => __( 'Donate / PayPal URL', 'thedreamers' ), 'default' => 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ),
        'academy_url'     => array( 'label' => __( 'Academy URL', 'thedreamers' ),    'default' => 'https://picknet.org/academy/' ),
        'apply_form_url'  => array( 'label' => __( 'Apply Form URL', 'thedreamers' ), 'default' => 'https://forms.gle/s5cZg7GFVpFPG7dEA' ),
        'volunteer_form'  => array( 'label' => __( 'Volunteer Form URL', 'thedreamers' ), 'default' => 'https://forms.gle/9MbhCQTE5HEe7Utj7' ),
        'partner_form'    => array( 'label' => __( 'Partner Form URL', 'thedreamers' ), 'default' => 'https://forms.gle/Jt2Fm4AvfwbpCzWs9' ),
    );
    foreach ( $text_settings as $key => $args ) {
        $wp_customize->add_setting( $key, array( 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $key, array(
            'label'   => $args['label'],
            'section' => 'thedreamers_org_info',
            'type'    => 'text',
        ) );
    }

    /* ── Section: Social Media ─────────────────────────────────── */
    $wp_customize->add_section( 'thedreamers_social', array(
        'title' => __( 'Social Media Links', 'thedreamers' ),
        'panel' => 'thedreamers_panel',
    ) );

    $social_settings = array(
        'social_linkedin'  => array( 'label' => __( 'LinkedIn URL', 'thedreamers' ),   'default' => 'https://www.linkedin.com/company/picknet/' ),
        'social_instagram' => array( 'label' => __( 'Instagram URL', 'thedreamers' ),  'default' => 'https://www.instagram.com/picknet55' ),
        'social_facebook'  => array( 'label' => __( 'Facebook URL', 'thedreamers' ),   'default' => 'https://www.facebook.com/share/1GWnkt2gRo/' ),
        'social_twitter'   => array( 'label' => __( 'X (Twitter) URL', 'thedreamers' ),'default' => 'https://x.com/picknet5' ),
        'social_youtube'   => array( 'label' => __( 'YouTube URL', 'thedreamers' ),    'default' => 'https://youtube.com/@picknetorg' ),
    );
    foreach ( $social_settings as $key => $args ) {
        $wp_customize->add_setting( $key, array( 'default' => $args['default'], 'sanitize_callback' => 'esc_url_raw' ) );
        $wp_customize->add_control( $key, array(
            'label'   => $args['label'],
            'section' => 'thedreamers_social',
            'type'    => 'url',
        ) );
    }

    /* ── Section: Homepage Content ─────────────────────────────── */
    $wp_customize->add_section( 'thedreamers_home', array(
        'title' => __( 'Homepage Settings', 'thedreamers' ),
        'panel' => 'thedreamers_panel',
    ) );

    $wp_customize->add_setting( 'show_newsletter', array( 'default' => true, 'sanitize_callback' => 'thedreamers_sanitize_checkbox' ) );
    $wp_customize->add_control( 'show_newsletter', array(
        'label'   => __( 'Show Newsletter Section on Homepage', 'thedreamers' ),
        'section' => 'thedreamers_home',
        'type'    => 'checkbox',
    ) );

    $wp_customize->add_setting( 'newsletter_heading', array( 'default' => 'Stay Connected with PICKNET', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'newsletter_heading', array(
        'label'   => __( 'Newsletter Section Heading', 'thedreamers' ),
        'section' => 'thedreamers_home',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'show_whatsapp_widget', array( 'default' => true, 'sanitize_callback' => 'thedreamers_sanitize_checkbox' ) );
    $wp_customize->add_control( 'show_whatsapp_widget', array(
        'label'   => __( 'Show WhatsApp Chat Widget', 'thedreamers' ),
        'section' => 'thedreamers_home',
        'type'    => 'checkbox',
    ) );
}
add_action( 'customize_register', 'thedreamers_customizer' );

/* ── Sanitize checkbox ───────────────────────────────────────────────────── */
function thedreamers_sanitize_checkbox( $checked ) {
    return ( isset( $checked ) && true === $checked ) ? true : false;
}

/* ── Helper: get customizer value with fallback ──────────────────────────── */
function td_opt( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

/* ── Inline CSS from Customizer colors ──────────────────────────────────── */
function thedreamers_customizer_css() {
    $primary   = sanitize_hex_color( td_opt( 'primary_color',   '#1a5c38' ) );
    $secondary = sanitize_hex_color( td_opt( 'secondary_color', '#d97706' ) );
    $dark      = sanitize_hex_color( td_opt( 'dark_color',      '#0f1f14' ) );

    // Lighten helpers (20% opacity versions via rgba conversion)
    list( $pr, $pg, $pb ) = sscanf( $primary,   '#%02x%02x%02x' );
    list( $sr, $sg, $sb ) = sscanf( $secondary, '#%02x%02x%02x' );

    $primary_rgb   = "{$pr},{$pg},{$pb}";
    $secondary_rgb = "{$sr},{$sg},{$sb}";

    echo '<style id="thedreamers-customizer-css">
        :root {
            --td-primary:       ' . esc_attr( $primary )   . ';
            --td-secondary:     ' . esc_attr( $secondary ) . ';
            --td-dark:          ' . esc_attr( $dark )      . ';
            --td-primary-rgb:   ' . esc_attr( $primary_rgb )   . ';
            --td-secondary-rgb: ' . esc_attr( $secondary_rgb ) . ';
        }
    </style>' . "\n";
}
add_action( 'wp_head', 'thedreamers_customizer_css', 999 );
