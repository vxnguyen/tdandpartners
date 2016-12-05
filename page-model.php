<?php
/**
 * The template for displaying the Model page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main model-main" role="main">

			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'header' ); ?>
			<?php endwhile; ?>

			<section class="expertise banner">
				<div class="overlay">
					<div class="inner">
						<p class="big">Our expertise in navigating New Jersey’s urban municipalities have led to our 100% project approval record.</p>
					</div>
				</div>
			</section>

			<section class="proven-model inner">
				<div class="header">
					<h2>Our Proven Model</h2>
				</div>
				<?php the_field('proven-model'); ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
