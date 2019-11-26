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
						<!-- <php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
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
						
						<!-- <div class="journal-posts-container"> -->
							<h3>
								<a class="jp-title"href="<?php echo get_post_permalink ( $post ); ?>"><?php echo $post->post_title; ?></a>
							</h3>
							<a href="<?php echo get_post_permalink( $post ); ?>" class="btn"><?php echo $post->name; ?> READ ENTRY</a> 
					</div>
				
				</div>
			   
			<?php endforeach; wp_reset_postdata(); ?>
		</div>

	</section>

	<section class="adventures-container">
		<h2>LASTEST ADVENTURES</h2>

		<div class="adventures-grid-container">
			<div class="canoe-girl">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg'?>" alt="girl in a canoe"
				>
				<div class="adv-title">
						<h3 class="adv-title-canoe title-grid"><a href="">Getting Back to Nature in a Canoe</a></h3>
						<p class="adv-read">READ MORE</p>
				</div>
			</div>
			
			<div class="beach">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg'?>" alt="bonfire"
				>
				<div class="adv-title">
					<h3 class="adv-title-beach title-grid"><a href="">A Night with Friends at the Beach</a></h3>	
					<p class="adv-read">READ MORE</p>				
				</div>
			</div>
			
			<div class="mountain">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg'?>" alt="hikers"
				>
				<div class="adv-title">
					<h3 class="adv-title-mountain title-grid"><a href="">Taking in the View at the Big Mountain</a></h3>
					<p class="adv-read">READ MORE</p>

				</div>
			</div>
			<div class="star-gazing">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg'?>" alt="Star-gazing"
				>
				<div class="adv-title">
					<h3 class="adv-title-star title-grid"><a href="">Star-Gazing at the Night Sky</a></h3>
					<p class="adv-read">READ MORE</p>
				</div>


			</div>
		</div>
		<!-- <ul class="adventure-entries">
			<li class="adventure-post">
				<div class="adv-img">
					<img 
						class="adventure-post-pic" src="<php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg'?>" alt="girl in a canoe">
				</div>

					<div class="adv-title">
						<h3 class="adv-title-grid"><a href="">Getting Back to Nature in a Canoe</a></h3>
						<p class="adv-read">READ MORE</p>
					</div>
			</li>
				

			<li class="adventure-post">
				<div class="adv-img">

					<img 
						class="adventure-post-pic" src="<php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg'?>" alt="bonfire">
				</div>

				<div class="adv-title">
					<h3 class="adv-title-grid"><a href="">A Night with Friends at the Beach</a></h3>	
					<p class="adv-read">READ MORE</p>				
				</div>
			</li>

			<li class="adventure-post">
				<div class="adv-img">
					<img 
						class="adventure-post-pic" src="<php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg'?>" alt="hikers">
				</div>

				<div class="adv-title">
					<h3 class="adv-title-grid"><a href="">Taking in the View at the Big Mountain</a></h3>
					<p class="adv-read">READ MORE</p>

				</div>
			</li>

			<li class="adventure-post">
				<div class="adv-img">
					<img 
						class="adventure-post-pic" src="<php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg'?>" alt="Star-gazing">
				</div>

				<div class="adv-title">
					<h3 class="adv-title-grid"><a href="">Star-Gazing at the Night Sky</a></h3>
					<p class="adv-read">READ MORE</p>
				</div>
			</li>
		</ul> -->

	</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
