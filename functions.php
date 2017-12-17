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

/* Custom text at the end of each post
/* ------------------------------------ */
add_filter('the_content', 'append_content_text'); 
function append_content_text($content)
{
    $currentlang = get_bloginfo('language');
    if (!is_single())
	{
		return $content;
    }
    
    if ($currentlang == "en-US")
	{
		$content .= "<hr><p><strong>You liked it? Stay with us!</strong></p><p>Follow us on <a href=\"http://facebook.com/tropimy\" target=\"_blank\"><strong>Facebook</strong></a>, or <a href=\"http://www.bloglovin.com/blog/12132223\" target=\"_blank\"><strong>Bloglovin</strong></a> or subscribe us on <a href=\"https://www.youtube.com/c/TroPiMy\" target=\"_blank\"><strong>Youtube</strong></a>!</div>";
		return $content;
    }
    if ($currentlang == "pl-PL")
	{
		$content .= "<hr>";
		$content .= "<p><strong>Jeśli spodobał Ci się ten tekst - zostań z nami!</strong></p>";
		/*$content .= "<p>Polub nasz <a href=\"http://facebook.com/tropimy\" target=\"_blank\"><strong>fanpage na Facebooku</strong></a> lub <a href=\"http://www.bloglovin.com/blog/12132223\" target=\"_blank\"><strong>Bloglovin</strong></a>, zasubskrybuj nasz kanał na <a href=\"https://www.youtube.com/c/TroPiMy\" target=\"_blank\"><strong>Youtube</strong></a>!</div>";*/
		$content .= do_shortcode('[yikes-mailchimp form="1" title="1" description="1" submit="Zapisz się!"]');
		return $content;
    }
}
?>