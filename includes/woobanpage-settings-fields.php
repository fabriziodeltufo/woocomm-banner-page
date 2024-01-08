<?php

/*  -----------------------------------------------------------------------------------------------
  DISPLAY
--------------------------------------------------------------------------------------------------- */
function woobanpage_display_banner()
{

  $options = get_option( 'woobanpage_banner' );

  $custom_text = '';

    if( isset( $options[ 'custom_text' ] ) )
    {
      $custom_text = esc_html( $options['custom_text'] );
    }

    if( is_front_page() )
    {
      ?>
          <div class="header-banner"><?php esc_html_e($custom_text); ?></div>
      <?php
    }

};
add_action('wp_head', 'woobanpage_display_banner');


/*  -----------------------------------------------------------------------------------------------
  SECTION CALLABACK
--------------------------------------------------------------------------------------------------- */
function woobanpage_section_cb() {

  esc_html_e( 'Insert the frontside message', 'woobanpage' );

}



/*  -----------------------------------------------------------------------------------------------
  INPUT FIELD CALLBACK
--------------------------------------------------------------------------------------------------- */
function woobanpage_custom_text_cb() {

  $options = get_option( 'woobanpage_banner' );

	$custom_text = '';
	if( isset( $options[ 'custom_text' ] ) ) {
		$custom_text = esc_html( $options['custom_text'] );
	}

  echo '<input type="text" id="woobanpage_customtext" name="woobanpage_banner[custom_text]" value="' . $custom_text . '" />';

}



/*
WOO Banner Settings Page
*/

function woobanpage_settings() {

  /*  -----------------------------------------------------------------------------------------------
    OPTION
  --------------------------------------------------------------------------------------------------- */

  // If plugin settings don't exist, then create them
  if( !get_option( 'woobanpage_settings' ) ) {
      add_option( 'woobanpage_banner' );
  }




  /*  -----------------------------------------------------------------------------------------------
    ADD SECTION
  --------------------------------------------------------------------------------------------------- */

  // Define (at least) one section for our fields
  add_settings_section(
    // Unique identifier for the section
    'woobanpage_section',
    // Section Title
    __( 'Frontside Banner Section', 'woobanpage' ),
    // Callback for an optional description
    'woobanpage_section_cb',
    // Admin page to add section to
    'woobanpage_page'
  );



/*  -----------------------------------------------------------------------------------------------
  ADD INPUT FIELD
--------------------------------------------------------------------------------------------------- */
  
  add_settings_field(
    // Unique identifier for field
    'woobanpage_custom_text',
    // Field Title
    __( 'Custom Text', 'woobanpage'),
    // Callback for field markup
    'woobanpage_custom_text_cb',
    // Page to go on
    'woobanpage_page',
    // Section to go in
    'woobanpage_section'
  );

  register_setting(
    'woobanpage_settings', // form field name
    'woobanpage_banner' // option name
  );

}
add_action( 'admin_init', 'woobanpage_settings' );