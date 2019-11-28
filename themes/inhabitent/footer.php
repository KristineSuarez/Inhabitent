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
						<div class="footer-side">
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
					</div>

					<div class="footer-info">
						<h3>BUSINESS HOURS</h3>
						<div class="footer-side">
							<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
							<p><strong>Saturday:</strong> 10am to 2pm</p>
							<p><strong>Sunday:</strong> Closed</p>
						</div>
					</div>

					<div class="footer-info">
					<a href="<?php echo home_url(); ?>">						
					<img src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-text.svg'?>" alt="Inhabitent Logo">
						</a>
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
