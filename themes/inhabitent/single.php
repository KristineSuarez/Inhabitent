<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
						<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

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


			<!-- <php get_template_part( 'template-parts/content', 'single' ); ?> -->


			<?php
				echo do_shortcode('[contact-form-7 id="178" title="Single Blog Post"]');
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
