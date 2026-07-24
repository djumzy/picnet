<?php
/**
 * THEDREAMERS — Auto Page & Menu Setup
 * Creates all PICKNET pages AND the primary navigation menu on theme activation.
 *
 * @package TheDreamers
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Pages to auto-create.
 * key   => page slug
 * title => page title
 * tpl   => page template file ('' = default template)
 * front => set as static front page?
 * blog  => set as posts page?
 */
function thedreamers_get_pages_config() {
    return array(
        'home'          => array( 'title' => 'Home',                        'tpl' => 'front-page.php', 'front' => true ),
        'about'         => array( 'title' => 'About PICKNET',               'tpl' => 'page-about.php'                  ),
        'approach'      => array( 'title' => 'Our Approach',                'tpl' => 'page-approach.php'               ),
        'thematic-focus'=> array( 'title' => 'Our Thematic Focus & Impact', 'tpl' => 'page-thematic-focus.php'         ),
        'programs'      => array( 'title' => 'Programs',                    'tpl' => 'page-programs.php'               ),
        'academy'       => array( 'title' => 'PICKNET Academy',             'tpl' => 'page-academy.php'                ),
        'kids-network'  => array( 'title' => 'Kids Network',                'tpl' => 'page-kids-network.php'           ),
        'team'          => array( 'title' => 'Our Team',                    'tpl' => 'page-team.php'                   ),
        'resources'     => array( 'title' => 'Resources',                   'tpl' => 'page-resources.php'              ),
        'faq'           => array( 'title' => 'FAQ',                         'tpl' => 'page-faq.php'                    ),
        'contact'       => array( 'title' => 'Contact & Donate',            'tpl' => 'page-contact.php'                ),
        'volunteer'     => array( 'title' => 'Volunteer',                   'tpl' => 'page-volunteer.php'              ),
        'partner'       => array( 'title' => 'Partner With Us',             'tpl' => 'page-partner.php'                ),
        'donate'        => array( 'title' => 'Donate',                      'tpl' => 'page-donate.php'                 ),
        'apply'         => array( 'title' => 'Apply',                       'tpl' => 'page-apply.php'                  ),
        'blog'          => array( 'title' => 'Blog & Stories',              'tpl' => '', 'blog' => true                ),
    );
}

/**
 * Nav menu structure — supports parent group items with children.
 *
 * type 'page'   => WordPress page by slug
 * type 'custom' => arbitrary URL
 * type 'group'  => no-link parent (href='#') — must have 'children'
 *
 * Each item/child can have: 'label', 'slug' (for page), 'url' (for custom), 'target'
 */
function thedreamers_get_menu_config() {
    return array(

        array( 'type' => 'page', 'slug' => 'home', 'label' => 'Home' ),

        array(
            'type'     => 'group',
            'label'    => 'About Us',
            'children' => array(
                array( 'type' => 'page', 'slug' => 'about',          'label' => 'Our Story' ),
                array( 'type' => 'page', 'slug' => 'team',           'label' => 'Our Team' ),
                array( 'type' => 'page', 'slug' => 'approach',       'label' => 'Our Approach' ),
                array( 'type' => 'page', 'slug' => 'thematic-focus', 'label' => 'Thematic Focus & Impact' ),
            ),
        ),

        array(
            'type'     => 'group',
            'label'    => 'What We Do',
            'children' => array(
                array( 'type' => 'page',   'slug' => 'programs',     'label' => 'All Programs' ),
                array( 'type' => 'page',   'slug' => 'kids-network', 'label' => 'Kids Network' ),
                array( 'type' => 'custom', 'url'  => 'https://picknet.org/academy/', 'label' => 'PICKNET Academy ↗', 'target' => '_blank' ),
            ),
        ),

        array(
            'type'     => 'group',
            'label'    => 'Get Involved',
            'children' => array(
                array( 'type' => 'page', 'slug' => 'volunteer', 'label' => 'Volunteer' ),
                array( 'type' => 'page', 'slug' => 'partner',   'label' => 'Partner With Us' ),
                array( 'type' => 'page', 'slug' => 'apply',     'label' => 'Apply Now' ),
                array( 'type' => 'page', 'slug' => 'donate',    'label' => 'Donate' ),
            ),
        ),

        array(
            'type'     => 'group',
            'label'    => 'Resources',
            'children' => array(
                array( 'type' => 'page', 'slug' => 'blog',      'label' => 'Blog & Stories' ),
                array( 'type' => 'page', 'slug' => 'resources', 'label' => 'Resources & Transparency' ),
                array( 'type' => 'page', 'slug' => 'faq',       'label' => 'FAQ' ),
            ),
        ),

        array( 'type' => 'page', 'slug' => 'contact', 'label' => 'Contact' ),

    );
}

function thedreamers_setup_pages() {
    $pages    = thedreamers_get_pages_config();
    $front_id = 0;
    $blog_id  = 0;

    foreach ( $pages as $slug => $cfg ) {
        $existing = get_page_by_path( $slug );
        if ( $existing ) {
            if ( ! empty( $cfg['front'] ) ) $front_id = $existing->ID;
            if ( ! empty( $cfg['blog']  ) ) $blog_id  = $existing->ID;
            continue;
        }

        $page_id = wp_insert_post( array(
            'post_title'     => $cfg['title'],
            'post_name'      => $slug,
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'post_content'   => '',
            'comment_status' => 'closed',
        ) );

        if ( $page_id && ! is_wp_error( $page_id ) ) {
            if ( ! empty( $cfg['tpl'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $cfg['tpl'] );
            }
            if ( ! empty( $cfg['front'] ) ) $front_id = $page_id;
            if ( ! empty( $cfg['blog']  ) ) $blog_id  = $page_id;
        }
    }

    if ( $front_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front',  $front_id );
    }
    if ( $blog_id ) {
        update_option( 'page_for_posts', $blog_id );
    }

    thedreamers_setup_menu();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'thedreamers_setup_pages' );

/**
 * Helper: insert one nav menu item and return its ID.
 */
function _td_add_menu_item( $menu_id, $args ) {
    $item_id = wp_update_nav_menu_item( $menu_id, 0, $args );
    return is_wp_error( $item_id ) ? 0 : $item_id;
}

/**
 * Create the "PICKNET Primary Menu" with grouped dropdowns
 * and assign it to the 'primary' theme location.
 */
function thedreamers_setup_menu() {
    $menu_name = 'PICKNET Primary Menu';

    $existing_menu = wp_get_nav_menu_object( $menu_name );
    if ( $existing_menu ) {
        wp_delete_nav_menu( $existing_menu->term_id );
    }

    $menu_id = wp_create_nav_menu( $menu_name );
    if ( is_wp_error( $menu_id ) ) return;

    $pos = 1;

    foreach ( thedreamers_get_menu_config() as $item ) {

        if ( $item['type'] === 'page' ) {
            // ── Standalone page link ──────────────────────────────
            $page = get_page_by_path( $item['slug'] );
            if ( ! $page ) continue;
            _td_add_menu_item( $menu_id, array(
                'menu-item-title'     => $item['label'],
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page->ID,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-position'  => $pos++,
            ) );

        } elseif ( $item['type'] === 'group' ) {
            // ── Group parent (no link) ────────────────────────────
            $parent_id = _td_add_menu_item( $menu_id, array(
                'menu-item-title'    => $item['label'],
                'menu-item-url'      => '#',
                'menu-item-type'     => 'custom',
                'menu-item-status'   => 'publish',
                'menu-item-position' => $pos++,
            ) );

            if ( ! $parent_id || empty( $item['children'] ) ) continue;

            // ── Children ──────────────────────────────────────────
            $child_pos = 1;
            foreach ( $item['children'] as $child ) {
                if ( $child['type'] === 'page' ) {
                    $page = get_page_by_path( $child['slug'] );
                    if ( ! $page ) continue;
                    _td_add_menu_item( $menu_id, array(
                        'menu-item-title'     => $child['label'],
                        'menu-item-object'    => 'page',
                        'menu-item-object-id' => $page->ID,
                        'menu-item-type'      => 'post_type',
                        'menu-item-status'    => 'publish',
                        'menu-item-position'  => $child_pos++,
                        'menu-item-parent-id' => $parent_id,
                    ) );
                } elseif ( $child['type'] === 'custom' ) {
                    _td_add_menu_item( $menu_id, array(
                        'menu-item-title'     => $child['label'],
                        'menu-item-url'       => $child['url'],
                        'menu-item-type'      => 'custom',
                        'menu-item-status'    => 'publish',
                        'menu-item-position'  => $child_pos++,
                        'menu-item-parent-id' => $parent_id,
                        'menu-item-target'    => ! empty( $child['target'] ) ? $child['target'] : '',
                    ) );
                }
            }
        }
    }

    $locations            = get_theme_mod( 'nav_menu_locations', array() );
    $locations['primary'] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
}
