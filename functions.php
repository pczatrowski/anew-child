<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() 
{
	wp_enqueue_style( 'anew', get_template_directory_uri() . '/style.css' );
}

function alx_scripts() {
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.min.js', array( 'jquery' ),'', false );
		wp_enqueue_script( 'jplayer', get_template_directory_uri() . '/js/jquery.jplayer.min.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true ); 
		if ( is_singular() ) { wp_enqueue_script( 'sharrre', get_template_directory_uri() . '/js/jquery.sharrre.min.js', array( 'jquery' ),'', true ); }
		if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }
	}

?>