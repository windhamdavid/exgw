<?php

if ( ! function_exists( 'exgw_setup' ) ):
function exgw_setup() {
	require( get_template_directory() . '/inc/template.php' );
}
endif; 
add_action( 'after_setup_theme', 'exgw_setup' );