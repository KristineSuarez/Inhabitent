<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="footer-info">
						<h3>CONTACT INFO</h3>
						<p>
							<i class="far fa-envelope"></i>
							<a href="mailto:infor@inhabitent.com"> info@inhabitent.com</a>
						</p>
						<p>
							<i class="fas fa-phone-alt"></i>778-456-7891
						</p>
						<p>
							<span><i class="fab fa-facebook-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
						</p>
					</div>

					<div class="footer-info">
						<h3>BUSINESS HOURS</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>

					<div class="footer-info">
						<img src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg'?>" alt="Inhabitent Logo">
					</div>
				</div>
					
					<div class="site-info">
						<p>COPYRIGHT © 2019 INHABITENT</p>
						<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
					</div><!-- .site-info -->
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
