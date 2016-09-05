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
	        <div class="row">
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
					  		<li class="navigation-links"><?php wp_nav_menu( array(
						  'theme_location' => 'primary' ) ); ?>
					  		</li>
			  			</ul>
                  	</div>
	              </div>
	          </div>
	        </div>
		</header>
		<!-- <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<ul class="menu">
				<li><input class="small"type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="s" /></li>
				<li><button type="button" class="button small" id="searchsubmit" value="Search" />Search</button></li>
			</ul>
		</form> -->
	    <section id="feature">
	        <div class="row">
	            <div class="large-12 columns">
					<img src="<?php header_image(); ?>" >
	            </div>

	        </div>
	    </section>

	<div id="content" class="site-content">
