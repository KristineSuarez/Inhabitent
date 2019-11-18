<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700&display=swap" rel="stylesheet">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg"/>
					</a>
					<h1 class="site-title screen-reader-text">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1>
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
				</div><!-- .site-branding -->
			
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> <!-- .site-navigation -->
					
			</header><!-- #masthead -->

<?php 
	if(is_front_page()){
		if(has_post_thumbnail()){?>
			<div class="f-banner">
				<?php the_post_thumbnail(); ?>
				<img class="f-banner-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
			</div>
			<?php		
		}
	}
		if(is_page('About')){
			if(has_post_thumbnail()){
				the_post_thumbnail();
				echo the_title("<h1 class='about-header'>","</h1>");	
			}		
		}
?>

<div id="content" class="site-content">