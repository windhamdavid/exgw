<?php

if ( ! function_exists( 'exgw_setup' ) ):
function exgw_setup() {
	require( get_template_directory() . '/inc/template.php' );
	require( get_template_directory() . '/inc/bootstrap.php' );
	require( get_template_directory() . '/inc/tweaks.php' );
}
endif; 
add_action( 'after_setup_theme', 'exgw_setup' );

function exgw_editor() {
    add_editor_style( 'style.css' );
}
add_action( 'init', 'exgw_editor' );

function exgw_scripts() {
	global $post;
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), false, true);
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'boot-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', 'jquery', '', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', 'jquery', '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', '', '', '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'exgw_scripts' );


add_theme_support( 'menus' );
function exgw_main_nav() {
    wp_nav_menu( 
    	array( 
    		'menu' => 'main',
    		'menu_class' => 'nav navbar-nav',
    		'theme_location' => 'main_nav',
    		'container' => 'false',
    		'fallback_cb' => 'wp_bootstrap_main_nav_fallback',
    		'depth' => '2', 
    		'walker' => new wp_bootstrap_navwalker()
    	)
    );
}
