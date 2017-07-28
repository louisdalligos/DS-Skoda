<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-skoda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsAON98ndGW0tqEmULBRVhFKV3UmgjPZQ"></script>
</head>

<body <?php body_class(); ?>>

	<header class="skoda1_page-header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="col-xs-6">
					<p class="skoda1_site-contact-mobile bold-text visible-xs">Call Us On <span class="skoda1_header-phone-number">1300 66 11 33</span></p>
				</div>

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-target="#skoda1_navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <i class="fa fa-th"></i></button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="skoda1_navbar">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'header-menu',
							'container'      => 'ul',
							'menu_class' => 'nav navbar-nav'
						) );
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		<div class="skoda1_branding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<h2 class="skoda1_branding-tagline bold-text pull-left"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
							<?php
							endif; ?>

						<div class="logo-img">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<?php
									$custom_logo_id = get_theme_mod( 'custom_logo' );
									$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								 ?>
								<img alt="Skoda" class="img-responsive pull-right" src="<?php echo $image[0]; ?>">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="skoda1_site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<h2 class="skoda1_site-name bold-text"><?php bloginfo( 'name' ); ?></h2>
					</div>
					<div class="col-md-7 col-sm-7">
						<div class="skoda1_site-contact-desktop">
							<p class="cta-message bold-text hidden-xs">Call Us On <span class="skoda1_header-phone-number">1300 66 11 33</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
