<?php
/**
 * THEDREAMERS — Functions
 * Main theme bootstrap file.
 *
 * @package TheDreamers
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'THEDREAMERS_VERSION', '3.0.0' );
define( 'THEDREAMERS_DIR',     get_template_directory() );
define( 'THEDREAMERS_URI',     get_template_directory_uri() );

/* ── Load includes ────────────────────────────────────────────────────────── */
require_once THEDREAMERS_DIR . '/inc/customizer.php';
require_once THEDREAMERS_DIR . '/inc/newsletter.php';
require_once THEDREAMERS_DIR . '/inc/setup-pages.php';

/* ══════════════════════════════════════════════════════════════════════════
 * 1. THEME SETUP
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_setup() {
    load_theme_textdomain( 'thedreamers', THEDREAMERS_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );

    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Image sizes
    add_image_size( 'thedreamers-hero',     1920, 800, true );
    add_image_size( 'thedreamers-card',      600, 400, true );
    add_image_size( 'thedreamers-square',    400, 400, true );
    add_image_size( 'thedreamers-team',      400, 500, true );

    // Navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'thedreamers' ),
        'footer'  => __( 'Footer Navigation', 'thedreamers' ),
        'mobile'  => __( 'Mobile Navigation', 'thedreamers' ),
    ) );

    // Block editor color palette
    add_theme_support( 'editor-color-palette', array(
        array( 'name' => __( 'Primary Green', 'thedreamers' ), 'slug' => 'primary', 'color' => '#1a5c38' ),
        array( 'name' => __( 'Amber Gold',    'thedreamers' ), 'slug' => 'secondary', 'color' => '#d97706' ),
        array( 'name' => __( 'Dark',          'thedreamers' ), 'slug' => 'dark', 'color' => '#0f1f14' ),
        array( 'name' => __( 'White',         'thedreamers' ), 'slug' => 'white', 'color' => '#ffffff' ),
    ) );
}
add_action( 'after_setup_theme', 'thedreamers_setup' );

/* ══════════════════════════════════════════════════════════════════════════
 * 2. CONTENT WIDTH
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'thedreamers_content_width', 1200 );
}
add_action( 'after_setup_theme', 'thedreamers_content_width', 0 );

/* ══════════════════════════════════════════════════════════════════════════
 * 3. ENQUEUE SCRIPTS & STYLES
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'thedreamers-google-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
        array(),
        null
    );

    // Main theme CSS
    wp_enqueue_style(
        'thedreamers-style',
        THEDREAMERS_URI . '/assets/css/theme.css',
        array( 'thedreamers-google-fonts' ),
        THEDREAMERS_VERSION
    );

    // WordPress stylesheet (required)
    wp_enqueue_style( 'thedreamers-main', get_stylesheet_uri(), array(), THEDREAMERS_VERSION );

    // Main JS
    wp_enqueue_script(
        'thedreamers-theme',
        THEDREAMERS_URI . '/assets/js/theme.js',
        array(),
        THEDREAMERS_VERSION,
        true
    );

    // AJAX URL & nonces for JS
    wp_localize_script( 'thedreamers-theme', 'TheDreamers', array(
        'ajaxUrl'           => admin_url( 'admin-ajax.php' ),
        'newsletterNonce'   => wp_create_nonce( 'thedreamers_newsletter_nonce' ),
        'whatsappNumber'    => esc_js( td_opt( 'org_whatsapp', '256740997528' ) ),
        'showWhatsapp'      => (bool) td_opt( 'show_whatsapp_widget', true ),
        'strings'           => array(
            'subscribing' => __( 'Subscribing…', 'thedreamers' ),
            'subscribe'   => __( 'Subscribe', 'thedreamers' ),
        ),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'thedreamers_scripts' );

/* ══════════════════════════════════════════════════════════════════════════
 * 4. WIDGETS
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'thedreamers' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in the blog sidebar.', 'thedreamers' ),
        'before_widget' => '<div id="%1$s" class="td-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="td-widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area 1', 'thedreamers' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="td-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="td-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'thedreamers_widgets_init' );

/* ══════════════════════════════════════════════════════════════════════════
 * 5. TEMPLATE HELPERS
 * ══════════════════════════════════════════════════════════════════════════ */

/**
 * Return page URL by slug (works even if slug/ID differ across installs).
 */
function td_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    return $page ? get_permalink( $page->ID ) : home_url( '/' . $slug . '/' );
}

/**
 * Output a section heading.
 */
function td_section_heading( $badge, $heading, $sub = '', $center = true ) {
    $cls = $center ? 'text-center' : '';
    ?>
    <div class="td-section-heading <?php echo esc_attr( $cls ); ?>">
        <?php if ( $badge ) : ?>
            <span class="td-badge"><?php echo esc_html( $badge ); ?></span>
        <?php endif; ?>
        <h2><?php echo esc_html( $heading ); ?></h2>
        <?php if ( $sub ) : ?>
            <p class="td-section-sub"><?php echo esc_html( $sub ); ?></p>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Social media links array from Customizer.
 */
function td_social_links() {
    return array(
        'linkedin'  => array( 'label' => 'LinkedIn',    'url' => td_opt( 'social_linkedin',  'https://www.linkedin.com/company/picknet/' ) ),
        'instagram' => array( 'label' => 'Instagram',   'url' => td_opt( 'social_instagram', 'https://www.instagram.com/picknet55' ) ),
        'facebook'  => array( 'label' => 'Facebook',    'url' => td_opt( 'social_facebook',  'https://www.facebook.com/share/1GWnkt2gRo/' ) ),
        'twitter'   => array( 'label' => 'X (Twitter)', 'url' => td_opt( 'social_twitter',   'https://x.com/picknet5' ) ),
        'youtube'   => array( 'label' => 'YouTube',     'url' => td_opt( 'social_youtube',   'https://youtube.com/@picknetorg' ) ),
    );
}

/* ══════════════════════════════════════════════════════════════════════════
 * 6. BODY CLASSES
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    $classes[] = 'thedreamers-theme';
    return $classes;
}
add_filter( 'body_class', 'thedreamers_body_classes' );

/* ══════════════════════════════════════════════════════════════════════════
 * 7. PREVENT CONFLICTS
 * ══════════════════════════════════════════════════════════════════════════ */
// Prefix all option names with 'thedreamers_' (done in customizer)
// Use child-theme-safe enqueue handles
// Remove emoji scripts (optional — keeps theme lean)
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ══════════════════════════════════════════════════════════════════════════
 * 8. SEO-FRIENDLY TITLE
 * ══════════════════════════════════════════════════════════════════════════ */
add_theme_support( 'title-tag' );

/* ══════════════════════════════════════════════════════════════════════════
 * 9. CUSTOM EXCERPT LENGTH
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_excerpt_length() { return 30; }
add_filter( 'excerpt_length', 'thedreamers_excerpt_length' );

function thedreamers_excerpt_more() { return '&hellip;'; }
add_filter( 'excerpt_more', 'thedreamers_excerpt_more' );

/* ══════════════════════════════════════════════════════════════════════════
 * 10. PRELOAD FONTS (performance)
 * ══════════════════════════════════════════════════════════════════════════ */
function thedreamers_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'thedreamers_preconnect_fonts', 1 );
