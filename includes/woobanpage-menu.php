<?php


/*  -----------------------------------------------------------------------------------------------
PLUGIN MENU + FORM
--------------------------------------------------------------------------------------------------- */


// PLUGIN FORM 
function woobanpage_menu_page_cb()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
      return;
    }
    include( WOOBANPAGE_DIR . 'templates/admin/woobanpage-form-page.php');
}


// PLUGIN MENU  
function woobanpage_menu_page()
{
    add_menu_page(
        __( 'WooCommerce Banner Page Setup', 'woobanpage' ), // admin_page_title
        __( 'WooCommerce Banner', 'woobanpage' ), // menu title
        'manage_options',
        'woobanpage',
        'woobanpage_menu_page_cb',
        'dashicons-menu',
        0
    );

}
add_action( 'admin_menu', 'woobanpage_menu_page' );