<?php
/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<section class="single-product-shop">
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="header-product">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->
				
					<div class="product-description">
						<?php the_title( '<h1 class="entry-product">', '</h1>' ); ?>
						<h2>$<?php the_field('price'); ?></h2>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
									) );
							?>
						</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php red_starter_entry_footer(); ?>
						<div class="single-btn">
							<p><i class="fab fa-facebook-f"></i>LIKE</p>
							<p><i class="fab fa-twitter"></i>TWEET</p>
							<p><i class="fab fa-pinterest"></i>PIN</p>
						</div>

					</footer><!-- .entry-footer -->
				

				
			</article><!-- #post-## -->
		</section>

			<!-- <php get_template_part( 'template-parts/content', 'single' ); ?> -->

			

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
