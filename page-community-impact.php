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
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/dollar-sign-icon.png" alt="Dollar Sign Icon" data-rjs="2">
							<p class="big">1.2 MILLION</p>
							<p>projected annual increase in new taxation revenue created from developments</p>
						</div>

						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/construction-icon.png" alt="Construction Icon" data-rjs="2">
							<p class="big">650,000 SQUARE FEET</p>
							<p>of blighted and environmentally impaired urban property redeveloped</p>
						</div>

						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/wall-icon.png" alt="Wall Icon" data-rjs="2">
							<p class="big">500</p>
							<p>construction jobs created</p>
						</div>

						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							<p class="big">1,103</p>
							<p>new quality affordable and middle-income housing units created</p>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
