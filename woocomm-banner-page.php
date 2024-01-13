<?php
  /*
  * Plugin Name:  WooCommerce Banner Page Setup.
  * Plugin URI:   https://wewebby.gumroad.com/
  * Description:  Yellow / Red Banner Text Customizable by Plugin Page Setup.
  * Version:      1.0.0
  * Requires at least: 6.4.2
  * Requires PHP:      7.4.33
  * Author:       WeWebby.com
  * Author URI:   https://wewebby.com
  * License:      GPLv2 or later
  * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
  * Text Domain:  woobanpage
  * Domain Path:  /languages
  */

  // If this file is called directly, abort.
  if ( ! defined( 'WPINC' ) ) {
    die;
  }

  define( 'WOOBANPAGE_URL', plugin_dir_url( __FILE__ ) );
  define( 'WOOBANPAGE_DIR', plugin_dir_path( __FILE__ ) );


  // include( plugin_dir_path( __FILE__ ) . 'includes/woobanpage-style.php');
  include( WOOBANPAGE_DIR . 'includes/woobanpage-style.php');
  include( WOOBANPAGE_DIR . 'includes/woobanpage-menu.php');
  include( WOOBANPAGE_DIR . 'includes/woobanpage-settings-fields.php');

