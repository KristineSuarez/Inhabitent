<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
   		$args = array( 
			   'post_type' => 'product', 
			   'post_per_page' => 3,
			   'order' => 'ASC');
			//    'tax_query' => array(
			// 	array(
			// 	   'taxonomy' => 'product-posts',
			// 	   'field'    => 'slug',
				//    'terms'    => 'bread',
   		$product_posts = get_posts( $args ); // returns an array of posts
	?>
	<?php 
		foreach ( $product_posts as $post ) : setup_postdata( $post ); 
		the_title();
		the_content();
	?>
	
	<?php 

   ?>
<?php endforeach; wp_reset_postdata(); ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
