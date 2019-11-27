<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="shop-container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="shop-header">
					<h1 class="shop-title">
						<?php
							if (is_post_type_archive('product')){
								echo 'SHOP STUFF';}
						?>
					</h1>

			</header><!-- .page-header -->

					<p class="shop-list">
						<?php 
							$product = get_terms ( array (
								'taxonomy' => 'product_type'
								)) ;
								foreach($product as $x){
									// echo $x->term_id;
									echo '<a href=" '. get_term_link($x) .'">'.$x->name.'</a>';
							}

						?>
					</p>
				</div>

			<div class="shop-grid">		
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>

							<div class="shop-price-container">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							<p class="product-price"> $<?php the_field('price'); ?></p>
							</div>

							<?php if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
							</div><!-- .entry-meta -->
							<?php endif; ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->

						<!-- <php
							get_template_part( 'template-parts/content', 'product' );
						?> -->

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
