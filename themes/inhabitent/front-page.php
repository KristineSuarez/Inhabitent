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

			<?php if (is_post_type_archive('uncategorized')){
				echo '';}
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
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
				</article><!-- #post-## -->

			<!-- <php get_template_part( 'template-parts/content', 'page' ); ?> -->

			<?php endwhile; // End of the loop. ?>

		
	<section class="product-info container">
            <h2>SHOP STUFF</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
						<img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />

						
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>

	<?php
   		$args = array( 
			   'post_type' => 'post', 
			   'posts_per_page' => 3,
			   'order' => 'ASC');
   		$product_posts = get_posts( $args ); // returns an array of posts
	?>

<div class="journal-box">
	<section class="journal-entries">
		<h2>INHABITENT JOURNAL</h2>
			
		<div class="journal-entries-container">
			<?php 
				foreach ( $product_posts as $post ) : //setup_postdata ( $post );  
			?>
				<div class="journal-posts">
					<?php the_post_thumbnail ('medium'); ?>  

					<div class="journal-posts-container">
						<p class="journal-comment">
							<span class="jc-date"><?php	$post_date = get_the_date('j F Y'); echo $post_date; ?></span> /
							<span class="jc-span"><?php comments_number();?></span>
						</p>
						
							<h3>
								<a class="jp-title"href="<?php echo get_post_permalink ( $post ); ?>"><?php echo $post->post_title; ?></a>
							</h3>
							<a href="<?php echo get_post_permalink( $post ); ?>" class="btn"><?php echo $post->name; ?> READ ENTRY</a> 
					</div>
				
				</div>
			   
			<?php endforeach; wp_reset_postdata(); ?>
		</div>

	</section>
</div>

	<section class="adventures-container">
		<h2>LASTEST ADVENTURES</h2>

		<div class="adventures-grid-container">
			<div class="canoe-girl">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg'?>" alt="girl in a canoe"
				>
				<div class="adv-title">
						<h3 class="at-canoe title-grid"><a href="">Getting Back to Nature in a Canoe</a></h3>
						<p class="read-canoe">READ MORE</p>
				</div>
			</div>
			
			<div class="beach">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg'?>" alt="bonfire"
				>
				<div class="adv-title">
					<h3 class="at-beach title-grid"><a href="">A Night with Friends at the Beach</a></h3>	
					<p class="read-beach">READ MORE</p>				
				</div>
			</div>
			
			<div class="mountain">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg'?>" alt="hikers"
				>
				<div class="adv-title">
					<h3 class="at-mountain title-grid"><a href="">Taking in the View at the Big Mountain</a></h3>
					<p class="read-mountain">READ MORE</p>

				</div>
			</div>
			<div class="star-gazing">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg'?>" alt="Star-gazing"
				>
				<div class="adv-title">
					<h3 class="at-star title-grid"><a href="">Star-Gazing at the Night Sky</a></h3>
					<p class="read-star">READ MORE</p>
				</div>
			</div>

			<p class="more-adventures">MORE ADVERNTURES</p>
		</div>

	</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
