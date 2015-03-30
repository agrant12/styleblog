<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package aThemes
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>

<?php if ( get_theme_mod('apple_touch_144') ) : ?>
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_theme_mod('apple_touch_144')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_114') ) : ?>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_theme_mod('apple_touch_114')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_72') ) : ?>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_theme_mod('apple_touch_72')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_57') ) : ?>
	<link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_mod('apple_touch_57')); ?>" />
<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<nav id="top-navigation" class="main-navigation" role="navigation">
		<div class="clearfix container">
			<?php wp_nav_menu( array( 'container_class' => 'sf-menu', 'theme_location' => 'top' ) ); ?>
		</div>
	<!-- #top-navigation --></nav>

	<header id="masthead" class="clearfix container site-header" role="banner">
		<div class="site-branding">
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div>
		<!-- .site-branding --></div>

		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
		<?php endif; ?>
	<!-- #masthead --></header>

	<nav id="main-navigation" class="container main-navigation" role="navigation">
		<a href="#main-navigation" class="nav-open">Menu</a>
		<a href="#" class="nav-close">Close</a>
		<?php wp_nav_menu( array( 'container_class' => 'sf-menu', 'theme_location' => 'main' ) ); ?>
		<?php get_search_form(); ?>
		<!--<?php get_search_form(); ?> -->
	<!-- #main-navigation --></nav>

	<div id="main" class="site-main">
		<div class="clearfix container">