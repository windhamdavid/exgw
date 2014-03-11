<?php

if ( ! function_exists( 'dw_page_title') ) :
function exgw_page_title() {
	global $page, $paged; 
	wp_title( '|', true, 'right' ); 
	bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'dw' ), max( $paged, $page ) );
}
endif;