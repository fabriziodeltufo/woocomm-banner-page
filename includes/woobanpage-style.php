<?php
/*
WP Plugin Style
*/

// Load CSS on the frontend
function woobanpage_style() {

  wp_enqueue_style('woobanpage-style', WOOBANPAGE_URL . 'css/woobanpage-style.css',[],time() );

}
add_action( 'wp_enqueue_scripts', 'woobanpage_style', 100 );




// Load CSS on the backend:admin plugin setup
function woobanpage_admin_style() {

  wp_enqueue_style('woobanpage-admin-style', WOOBANPAGE_URL . 'templates/admin/woobanpage-admin-style.css',[],time() );

}
add_action( 'admin_enqueue_scripts', 'woobanpage_admin_style', 100 );



