<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header" class="wrap-outer">
		<div class="wrap">
			<h1 id="site-name" class="page-theme"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<h2 id="site-desc" class="page-theme-description"><?php bloginfo('description'); ?></h2>			
		</div>
	</header>

	<nav id="top-nav" class="wrap-outer" role="navigation">
		<div class="wrap">
			<div class="top-nav-container">
				<?php wp_nav_menu( array( 'theme_location' => 'top_nav' ) ); ?>
			</div>
		</div>
	</nav>