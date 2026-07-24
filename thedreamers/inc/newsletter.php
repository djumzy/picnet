<?php
/**
 * THEDREAMERS — Newsletter Functionality
 * Custom DB table, AJAX handler, shortcode, and widget.
 *
 * @package TheDreamers
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ── 1. Create subscribers table on activation ────────────────────────────── */
function thedreamers_create_newsletter_table() {
    global $wpdb;
    $table   = $wpdb->prefix . 'thedreamers_subscribers';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS {$table} (
        id          BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        email       VARCHAR(200)        NOT NULL,
        first_name  VARCHAR(100)        NOT NULL DEFAULT '',
        subscribed  DATETIME            NOT NULL DEFAULT CURRENT_TIMESTAMP,
        status      TINYINT(1)          NOT NULL DEFAULT 1,
        ip_address  VARCHAR(100)        NOT NULL DEFAULT '',
        PRIMARY KEY (id),
        UNIQUE KEY email (email)
    ) {$charset};";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );

    update_option( 'thedreamers_newsletter_db_version', '1.0' );
}
add_action( 'after_switch_theme', 'thedreamers_create_newsletter_table' );

/* ── 2. AJAX handlers ─────────────────────────────────────────────────────── */
function thedreamers_newsletter_subscribe() {
    // Verify nonce
    if ( ! check_ajax_referer( 'thedreamers_newsletter_nonce', 'nonce', false ) ) {
        wp_send_json_error( array( 'message' => __( 'Security check failed. Please refresh and try again.', 'thedreamers' ) ) );
    }

    $email      = isset( $_POST['email'] )      ? sanitize_email( wp_unslash( $_POST['email'] ) )       : '';
    $first_name = isset( $_POST['first_name'] ) ? sanitize_text_field( wp_unslash( $_POST['first_name'] ) ) : '';

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'thedreamers' ) ) );
    }

    global $wpdb;
    $table = $wpdb->prefix . 'thedreamers_subscribers';

    // Check duplicate
    $existing = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM {$table} WHERE email = %s", $email ) );
    if ( $existing ) {
        wp_send_json_error( array( 'message' => __( 'You are already subscribed! Thank you for your support.', 'thedreamers' ) ) );
    }

    $result = $wpdb->insert(
        $table,
        array(
            'email'      => $email,
            'first_name' => $first_name,
            'subscribed' => current_time( 'mysql' ),
            'status'     => 1,
            'ip_address' => isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '',
        ),
        array( '%s', '%s', '%s', '%d', '%s' )
    );

    if ( false === $result ) {
        wp_send_json_error( array( 'message' => __( 'Something went wrong. Please try again later.', 'thedreamers' ) ) );
    }

    // Optional: send confirmation email
    $admin_email = get_option( 'admin_email' );
    wp_mail(
        $email,
        sprintf( __( 'Welcome to the PICKNET Community, %s!', 'thedreamers' ), $first_name ?: __( 'Friend', 'thedreamers' ) ),
        sprintf(
            __( "Thank you for subscribing to PICKNET updates!\n\nYou'll now receive news about our programs, impact stories, and ways to support refugee-led development in Rwamwanja, Uganda.\n\nTogether, we build futures.\n\nThe PICKNET Team\nhttps://picknet.org", 'thedreamers' )
        )
    );

    // Notify admin
    wp_mail(
        $admin_email,
        __( 'New Newsletter Subscriber — PICKNET', 'thedreamers' ),
        sprintf( __( "New subscriber:\nName: %s\nEmail: %s\nDate: %s", 'thedreamers' ), $first_name, $email, current_time( 'mysql' ) )
    );

    wp_send_json_success( array( 'message' => __( 'Thank you! You\'re now part of the PICKNET community. Check your inbox!', 'thedreamers' ) ) );
}
add_action( 'wp_ajax_thedreamers_newsletter',        'thedreamers_newsletter_subscribe' );
add_action( 'wp_ajax_nopriv_thedreamers_newsletter', 'thedreamers_newsletter_subscribe' );

/* ── 3. Shortcode: [picknet_newsletter] ───────────────────────────────────── */
function thedreamers_newsletter_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'heading'     => __( 'Stay Connected with PICKNET', 'thedreamers' ),
        'subheading'  => __( 'Get updates on programs, impact stories, and ways to support refugee-led development in Uganda.', 'thedreamers' ),
        'button_text' => __( 'Subscribe', 'thedreamers' ),
        'style'       => 'default',  // default | inline | card
    ), $atts, 'picknet_newsletter' );

    ob_start();
    ?>
    <div class="td-newsletter-widget td-newsletter-<?php echo esc_attr( $atts['style'] ); ?>">
        <?php if ( $atts['heading'] ) : ?>
            <h3 class="td-newsletter-heading"><?php echo esc_html( $atts['heading'] ); ?></h3>
        <?php endif; ?>
        <?php if ( $atts['subheading'] ) : ?>
            <p class="td-newsletter-sub"><?php echo esc_html( $atts['subheading'] ); ?></p>
        <?php endif; ?>
        <form class="td-newsletter-form" data-nonce="<?php echo esc_attr( wp_create_nonce( 'thedreamers_newsletter_nonce' ) ); ?>">
            <div class="td-nl-row">
                <input type="text"  name="first_name" placeholder="<?php esc_attr_e( 'First name (optional)', 'thedreamers' ); ?>" class="td-nl-input" autocomplete="given-name">
                <input type="email" name="email"      placeholder="<?php esc_attr_e( 'Your email address', 'thedreamers' ); ?>" class="td-nl-input td-nl-email" required autocomplete="email">
                <button type="submit" class="td-nl-btn"><?php echo esc_html( $atts['button_text'] ); ?></button>
            </div>
            <div class="td-nl-message" aria-live="polite"></div>
        </form>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'picknet_newsletter', 'thedreamers_newsletter_shortcode' );

/* ── 4. Admin menu: view subscribers ─────────────────────────────────────── */
function thedreamers_newsletter_admin_menu() {
    add_submenu_page(
        'themes.php',
        __( 'Newsletter Subscribers', 'thedreamers' ),
        __( 'Subscribers', 'thedreamers' ),
        'manage_options',
        'thedreamers-subscribers',
        'thedreamers_subscribers_page'
    );
}
add_action( 'admin_menu', 'thedreamers_newsletter_admin_menu' );

function thedreamers_subscribers_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'thedreamers_subscribers';
    // phpcs:ignore WordPress.DB.DirectDatabaseQuery
    $subscribers = $wpdb->get_results( "SELECT * FROM {$table} ORDER BY subscribed DESC" );
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'PICKNET Newsletter Subscribers', 'thedreamers' ); ?></h1>
        <p><?php printf( esc_html__( 'Total subscribers: %d', 'thedreamers' ), count( $subscribers ) ); ?></p>
        <table class="widefat striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php esc_html_e( 'Email', 'thedreamers' ); ?></th>
                    <th><?php esc_html_e( 'Name', 'thedreamers' ); ?></th>
                    <th><?php esc_html_e( 'Date', 'thedreamers' ); ?></th>
                    <th><?php esc_html_e( 'Status', 'thedreamers' ); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if ( $subscribers ) : ?>
                    <?php foreach ( $subscribers as $i => $s ) : ?>
                        <tr>
                            <td><?php echo absint( $i + 1 ); ?></td>
                            <td><?php echo esc_html( $s->email ); ?></td>
                            <td><?php echo esc_html( $s->first_name ); ?></td>
                            <td><?php echo esc_html( $s->subscribed ); ?></td>
                            <td><?php echo $s->status ? '<span style="color:green">&#10003; Active</span>' : '<span style="color:red">Inactive</span>'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr><td colspan="5"><?php esc_html_e( 'No subscribers yet.', 'thedreamers' ); ?></td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <h2 style="margin-top:20px"><?php esc_html_e( 'Export CSV', 'thedreamers' ); ?></h2>
        <form method="post" action="">
            <?php wp_nonce_field( 'thedreamers_export_csv', 'thedreamers_csv_nonce' ); ?>
            <input type="hidden" name="thedreamers_action" value="export_csv">
            <input type="submit" class="button button-primary" value="<?php esc_attr_e( 'Download CSV', 'thedreamers' ); ?>">
        </form>
    </div>
    <?php
}

/* CSV export */
function thedreamers_handle_csv_export() {
    if ( ! isset( $_POST['thedreamers_action'] ) || 'export_csv' !== $_POST['thedreamers_action'] ) return;
    if ( ! current_user_can( 'manage_options' ) ) return;
    if ( ! isset( $_POST['thedreamers_csv_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['thedreamers_csv_nonce'] ), 'thedreamers_export_csv' ) ) return;

    global $wpdb;
    $table = $wpdb->prefix . 'thedreamers_subscribers';
    // phpcs:ignore WordPress.DB.DirectDatabaseQuery
    $rows = $wpdb->get_results( "SELECT email, first_name, subscribed, status FROM {$table} ORDER BY subscribed DESC", ARRAY_A );

    header( 'Content-Type: text/csv; charset=utf-8' );
    header( 'Content-Disposition: attachment; filename=picknet-subscribers-' . gmdate( 'Y-m-d' ) . '.csv' );
    $out = fopen( 'php://output', 'w' );
    fputcsv( $out, array( 'Email', 'First Name', 'Subscribed', 'Status' ) );
    foreach ( $rows as $row ) {
        fputcsv( $out, $row );
    }
    fclose( $out );
    exit;
}
add_action( 'admin_init', 'thedreamers_handle_csv_export' );
