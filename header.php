<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kustiesbrivi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kustiesbrivi' ); ?></a>

	<header id="masthead" class="site-header">
                <div id="top-bar">
                        <ul id="kontaktinfo">
                                <li><a href="https://www.google.lv/maps/place/Kusties+Br%C4%ABvi+SIA/@56.9408883,24.1326312,17z/data=!3m1!4b1!4m5!3m4!1s0x46eecfa0459c475d:0x8889d4676eb051df!8m2!3d56.9408883!4d24.1348199" target="_blank"><i class="fa fa-map-marker" aria-hidden="true" ></i>Firsa Sadovņikova iela 20 - 318, Rīga</a></li>
                                <li><a href="mailto:info@kustiesbrivi.lv"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@kustiesbrivi.lv</a></li>
                        </ul>
                        <div class="soc">
                                <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-google fa-lg"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a> 
                        </div>				
                </div>
		<div class="site-branding">
			<?php the_custom_logo(); ?>
                        <a class="phone" href="tel:+371 26589789"><i class="fa fa-mobile" aria-hidden="true"></i>Saziņai: +371 23004318</a>
		</div><!-- .site-branding -->

		
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-name"><?php esc_html_e( 'Izvēlne', 'kustiesbrivi' ); ?></span><span class="bar"></span></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		











		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
