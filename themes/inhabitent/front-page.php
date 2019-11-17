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
			<?php 
				foreach ( $product_posts as $post ) : setup_postdata ( $post ); 
			?>
		<div class="journal-entries-container">
			<div class="journal-posts">
				<?php 
					the_post_thumbnail ('large');
					the_title ();
					comments_number();
				?>
				<p>
					<?php echo $post->title; ?>
				</p>
				<p>
					<a href="<?php echo get_term_link ( $post ); ?>" class="btn"><?php echo $post->name; ?> READ ENTRY</a> 
				</p>
			</div>

		   <?php endforeach; wp_reset_postdata(); ?>


		</div>
	</section>

	<section class="adventures-container">
		<h2>LASTEST ADVENTURES</h2>
		<div class="adventure-entries">
			<div class="adventure-post">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg'?>" alt="girl in a canoe"
				>
				<a href="">Getting Back to Nature in a Canoe</a>
			</div>

			<div class="adventure-post">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg'?>" alt="bonfire"
				>
				<a href="">A Night with Friends at the Beach</a>
			</div>

			<div class="adventure-post">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg'?>" alt="hikers"
				>
				<a href="">Taking in the View at the Big Mountain</a>
			</div>

			<div class="adventure-post">
				<img 
					class="adventure-post-pic" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg'?>" alt="Star-gazing"
				>
				<a href="">Star-Gazing at the Night Sky</a>
			</div>
		</div>

	</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
