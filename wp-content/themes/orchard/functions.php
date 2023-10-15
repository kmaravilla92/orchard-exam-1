<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register navigation menus
 * 
 * @return void
 */
if ( !function_exists( 'orchard_register_nav_menu' ) ) {
    add_action( 'after_setup_theme', 'orchard_register_nav_menu' );
    function orchard_register_nav_menu(): void {
        register_nav_menus(
            [
                'primary_menu' => __( 'Primary Menu', 'orchard' ),
            ]
        );
    }
}

/**
 * Enqueue theme styles
 * 
 * @return void
 */
if ( !function_exists( 'orchard_enqueue_styles' ) ) {
    add_action( 'wp_enqueue_scripts', 'orchard_enqueue_styles' );
    function orchard_enqueue_styles(): void {
        wp_enqueue_style(
            'main',
            get_stylesheet_uri(),
            [],
            filemtime( get_stylesheet_directory() . '/style.css' )
        );
    }
}

/**
 * Find menu item's banner image by page ID.
 * 
 * @param   int         $page_id    ID of page that's related to the menu item.  
 * @return  int|null                Attachment ID if found, null if not.
 */
if ( !function_exists( 'orchard_find_page_banner_image' ) ) {
    function orchard_find_page_banner_image(
        int $page_id
    ): int|null {
        $banner_image   = null;
        $menu_items     = wp_get_nav_menu_items( 'Primary Menu' );

        if ( !$menu_items ) {
            return $banner_image;
        }

        foreach ( $menu_items as $menu_item ) {
            if ( $page_id === (int) $menu_item->object_id ) {
                $field_id = $menu_item->ID;
                if ( (int) $menu_item->menu_item_parent > 0 ) {
                    $field_id = $menu_item->menu_item_parent;
                }

                $banner_image = get_field( 'banner_image', $field_id );
                
                break;
            }
        }

        return $banner_image;
    }
}