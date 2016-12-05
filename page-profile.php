<?php
/**
 * The template for displaying the Profile page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main profile-main" role="main">

			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'header' ); ?>
			<?php endwhile; ?>

			<section class="infographic inner">
				<div class="infographic__block">
					<div>
						<div class="infographic__bar bar-1"></div>
					</div>
					<div>
						<p class="big">$305 Million</p>
						<p>Total value of approved projects</p>
					</div>
				</div>

				<div class="infographic__block">
					<div>
						<div class="infographic__bar bar-2"></div>
					</div>
					<div>
						<p class="big">$100 Million</p>
						<p>Total value of projects in development</p>
					</div>
				</div>

				<div class="infographic__block">
					<div>
						<div class="infographic__bar bar-3"></div>
					</div>
					<div>
						<p class="big">$26 Million</p>
						<p>Tax credits awarded</p>
					</div>
				</div>

				<div class="infographic__buildings">
					<div> 
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
						</div>
						<div>
							<p class="big">1,103</p>
							<p>Residential Units</p>
						</div>
					</div>

					<div> 
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="House Icon" data-rjs="2">
						</div>
						<div>
							<p class="big">180,000</p>
							<p>Square feet of commercial space</p>
						</div>
					</div>
				</div>
			</section>

			<section class="core-competencies banner">
				<div class="overlay">
					<div class="inner">
						<img src="<?php echo get_template_directory_uri(); ?>/images/core-competencies-icon.png" alt="Core Competencies Icon" data-rjs="2">
						<h2>Core Competencies</h2>
						<?php the_field('core-competencies'); ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
