
<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package portfolio
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

		<header>
			<div class="row navigation">
				<div class="large-12 columns">
					<div class="top-bar">
						<div class="top-bar-left">
							<ul class="menu menu-links">
								<li class="menu-text"><a href="
									<?php echo esc_url( home_url() ); ?>">
									<?php echo get_bloginfo( 'name'); ?></a>
								</li>
							</ul>
						</div>
						<div class="top-bar-right">
							<ul class="menu menu-links">
								<li><a title="E-Mail" class="header-icons" href="mailto:austinjminnon@gmail.com"><i class="fi-mail"></i></a>
								</li>
								<li><a title="Telephone" class="header-icons" href="tel:2076516220"><i class=" fi-telephone"></i></a>
								</li>
								<li><a title="GitHub"class="header-icons" href="https://github.com/AustinMinnon"><i class="fi-social-github"></i></a>
								</li>
								<li><a title="LinkedIn" class="header-icons" href="https://linkedin.com/in/AustinMinnon"><i class="fi-social-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="top-bar top-bar2">
						<div class="top-bar-left">
							<ul class="menu">
								<li class="menu-item"><a class"info" href="<?php echo esc_url( get_permalink( get_page_by_title( 'experience' ) ) ); ?>">Website &amp; Mobile Developer  </a></li>
							</ul>
						</div>
						<div class="top-bar-right">
							<ul class="menu menu-links">
								<li class="navigation-links"><?php wp_nav_menu( array(
									'theme_location' => 'primary' ) ); ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section id="feature">
			<img src="<?php header_image(); ?>" >
		</section>

	</div>

	<div id="content" class="site-content">
