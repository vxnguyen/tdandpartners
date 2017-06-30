<?php
/**
 * The template for displaying the Community Impact page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main community-impact-main" role="main">

			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'header' ); ?>
			<?php endwhile; ?>

			<section class="community-impact inner">
				<div class="flex-container">
					<div>
						<?php the_field('description'); ?>
					</div>

					<div class="community-impact__infographic">
						<h4>Our projects create an exponential economic and community impact by redeveloping large blighted properties that have a negative value for urban municipalities.</h4>

						<div>
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/dollar-sign-icon.png" alt="Dollar Sign Icon" data-rjs="2">
							</div>
							<div>
								<h4>305 MILLION</h4>
								<p>total value of approved projects</p>
							</div>
						</div>

						<div>
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/construction-icon.png" alt="Construction Icon" data-rjs="2">
							</div>
							<div>
								<h4>15 ACRES</h4>
								<p>of blighted and environmentally urban property redeveloped</p>
							</div>
						</div>

						<div>
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							</div>
							<div>
								<h4>1,103 UNITS</h4>
								<p>new quality affordable and middle-income housing units created</p>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
