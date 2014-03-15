<?php

if ( ! function_exists( 'exgw_setup' ) ):
function exgw_setup() {
	require( get_template_directory() . '/inc/template.php' );
	require( get_template_directory() . '/inc/tweaks.php' );
}
endif; 
add_action( 'after_setup_theme', 'exgw_setup' );


function exgw_scripts() {
	global $post;
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), false, true);
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', 'jquery', '', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', 'jquery', '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', '', '', '', true );
	}

}
add_action( 'wp_enqueue_scripts', 'exgw_scripts' );

function exgw_editor() {
    //add_editor_style( 'style.css' );
}
add_action( 'init', 'exgw_editor' );