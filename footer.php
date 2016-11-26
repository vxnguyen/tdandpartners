<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tdandpartners
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner">
			<div class="site-footer__info">
				<div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php bloginfo( 'name' ); ?>"><?php the_custom_logo(); ?>
				</div>
				<div>
					<p>We seek exceptional returns on invested capital by maximizing the use of financial incentives and subsidies. We combine empirical researched data, and superior understanding of hyper local political, economic and social knowledge of the market, to create financially successful projects.</p>
				</div>
			</div><!-- .site-info -->

			<?php $args = array(
				'post_type' => 'contact'
				);
				
				$the_query = new WP_Query( $args );
			?>


			<div class="site-footer__contact">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<h4>Contact</h4>
					<div>
						<div class="site-footer__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" data-rjs="2"></div>
						<a href="mailto:<?php the_field('contact-email'); ?>"><?php the_field('contact-email'); ?></a>
					</div>

					<div>
						<div class="site-footer__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" data-rjs="2"></div>
						<a href="tel:<?php the_field('contact-phone'); ?>"><?php the_field('contact-phone'); ?></a>
					</div>

					<div>
						<div class="site-footer__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/address-icon.png" data-rjs="2"></div>
						<address><?php the_field('contact-address'); ?></address>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
