<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package paddingtoncentral
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
       
<!-- Webfonts -->
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/8fd244ec-a014-477e-a299-302303c0e47d.css"/>

<?php wp_head(); ?>

<script>
            <!-- JQuery -->
           /* $(document).ready(function(){ 
                $('div#page.hfeed.site').click(function() { 
			$('div#page.hfeed.site').innerHtml = 
		});
            });*/
        </script> 
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
            <!-- Home page title removed ~John -->
		<!--<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="header-logo">-->
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bl-logo-01.png" alt="" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="176" height="38" /></a
		</div>

                <!-- Horizontal nav bar removed ~John -->
		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php //_e( 'Menu', 'paddingtoncentral' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php //esc_attr_e( 'Skip to content', 'paddingtoncentral' ); ?>"><?php //_e( 'Skip to content', 'paddingtoncentral' ); ?></a>
                    </div>

			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>-->
	<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">