<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="search-header">
				<h1 class="search-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .search-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="search-header2">
					<?php the_title( sprintf( '<h2 class="search-title2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="search-meta">
						<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
					</div><!-- .search-meta -->
						<?php endif; ?>
				</header><!-- .search-header2 -->

					<div class="search-summary">
						<?php the_excerpt(); ?>
					</div><!-- .search-summary -->
			</article><!-- #post-## -->


				<!-- <php get_template_part( 'template-parts/content', 'search' ); ?> -->

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html( 'Nothing Found' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( wp_kses( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php echo esc_html( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' ); ?></p>
						<?php get_search_form(); ?>

					<?php else : ?>

						<p><?php echo esc_html( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.' ); ?></p>
						<?php get_search_form(); ?>

					<?php endif; ?>
				</div><!-- .page-content -->
			</section><!-- .no-results -->


			<!-- <php get_template_part( 'template-parts/content', 'none' ); ?> -->

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
