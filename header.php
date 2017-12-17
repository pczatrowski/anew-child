<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="alexaVerifyID" content="howgE5t-f_pNEJzhT8x-LcZJ17o"/>
	<meta name="google-site-verification" content="L6OkDf8MpsJJ9b8RggJofZFbIA2uwx3NUiFM4BW6bKY" />
        <meta name="p:domain_verify" content="7aa2ed471187df48728d5dc9b1ac8400"/>
	<title><?php wp_title(''); ?></title>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

<!-- Hotjar Tracking Code for http://www.tropimy.com -->
<!--<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:258313,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
-->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '425244511001743');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=425244511001743&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">

	<header id="header">
	
		<?php if (has_nav_menu('topbar')): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				
				<div class="container">	
					<div class="toggle-search"><?php _e('Search','anew'); ?> <i class="fa fa-search"></i></div>
					<div class="search-expand" id="search-window">
						<div class="search-expand-inner" id="search-window-inner">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div><!--/.container-->
				
			</nav><!--/#nav-topbar-->
		<?php endif; ?>
		
		<div class="container">
			<?php if ( ot_get_option('header-image') == '' ): ?>
			<div class="pad group">
				<?php echo alx_site_title(); ?>
				<?php if ( ot_get_option('site-description') != 'off' ): ?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
				<?php alx_social_links() ; ?>
			</div>
			<?php endif; ?>
			<?php if ( ot_get_option('header-image') ): ?>
				<a href="<?php echo home_url('/'); ?>" rel="home">
					<img class="site-image" src="<?php echo ot_get_option('header-image'); ?>" alt="<?php get_bloginfo('name'); ?>">
				</a>
			<?php endif; ?>
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	<div id="page" class="container">
		<div class="main group">