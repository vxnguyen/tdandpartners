<?php
/**
 * The template for displaying the Projects page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main projects-main" role="main">

			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'header' ); ?>
			<?php endwhile; ?>

			<?php 
				$args = array(
					'post_type' => 'td_projects'
				);
			
				$the_query = new WP_Query( $args );
			?>

			<section class='projects-list inner'>
				<div>
			
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="projects-thumbnail">
						<div class="projects-thumbnail-overlay">
							<div class="projects-thumbnail-overlay-content">
								<h2><?php the_field('name'); ?></h2>
								<p><?php the_field('type'); ?></p>
								<a href="<?php echo esc_url( get_permalink() ); ?>">View Project</a>
							</div>
						</div>
						<?php echo wp_get_attachment_image( get_field('image'), array('350')); ?>
					</div>
			
				<?php endwhile; wp_reset_query(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
