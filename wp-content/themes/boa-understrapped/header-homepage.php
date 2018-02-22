<?php
	/**
		* The header for our theme.
		*
		* Displays all of the <head> section and everything up till <div id="content">
		*
		* @package understrap
	*/
	
	$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Madeleines" />
		<meta name="copyright" content="Madeleines" />
		<meta name="publisher" content="Madeleines" />
		<meta http-equiv="cleartype" content="on" />
		<meta http-equiv="expires" content="0" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="5 days" />
		<meta name="audience" content="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- MOBILE / TABLET -->
		<meta name='HandheldFriendly' content='true' />
		<meta name='format-detection' content='telephone=no' />
		<meta name="apple-mobile-web-app-title" content="Madeleines" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
        <meta name="description" content="Relaxed and stress free overland travel to places that few other companies visit." />
        <meta name="keywords" content="Best of Asia Overland, BOA Overland, Asia Overland travel, Subcontinent Overland travel, Bangladesh Overland, Bhutan Overland, Nepal Overland, Tibet Overland, India Overland, North- East India Overland, China Overland, adventure Overland travel, comfort overland trips, explore Asia, adventure holidays, overland trips, upmarket overland, travel with iPad, iPad, Android, facebook, computer facilities, full inclusive overland trips, air conditioning overland, unique remote overland, overland truck holidays, adventure in comfort, Everest Base Camp, Mount Kailash, relaxed, stress free, adventure in comfort" />
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Josefin+Sans" rel="stylesheet"> 
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
	</head>
	
    <body <?php body_class(); ?>>
        <div class="hfeed site" id="page">
            <!-- ******************* Logo/Header ******************* -->
			
			<?php get_template_part('loop-templates/content','slider'); ?>
            <?php if ( 'container' == $container ) : ?>
			<div class="container">
				<?php endif; ?>
				<div class="row">
					<div class="col-xs-12 mx-auto header-logo">
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>
							<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								<?php bloginfo( 'name' ); ?>
							</a>
							<?php endif; ?>
							<?php } else { 
								the_custom_logo();
								
							} ?>
							<!-- end custom logo -->
					</div>
					
				</div>
				<?php if ( 'container' == $container ) : ?>
			</div>
			<!-- .container -->
			
			<?php endif; ?>
			<!-- ******************* The Navbar Area ******************* -->
			<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
				<a class="skip-link screen-reader-text sr-only" href="#content">
					<?php esc_html_e( 'Skip to content',
					'understrap' ); ?>
				</a>
				<nav class="navbar sticky-top navbar-expand-lg  navbar-light  bg-primary">
					<?php if ( 'container' == $container ) : ?>
					<div class="container">
						<?php endif; ?>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span><span class="navbar-toggler-icon"></span><span class="navbar-toggler-icon"></span></button>
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse justify-content-center',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
						<?php if ( 'container' == $container ) : ?>
					</div>
					<!-- .container -->
					<?php endif; ?>
					<div class="">
						<form class="form-inline ml-auto">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini btn-round">
								<i class="material-icons">search</i>
							</button>
						</form>
					</div>
				</nav>
				<!-- .site-navigation -->
			</div>
		<!-- .wrapper-navbar end -->				