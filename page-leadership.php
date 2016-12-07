<?php
/**
 * The template for displaying the Leadership page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main leadership-main" role="main">

			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'header' ); ?>
			<?php endwhile; ?>

			<?php 
				$args = array(
					'post_type' => 'leadership_team',
					'order'   => 'ASC'
				);

				$the_query = new WP_Query( $args );
			?>

			<section class="leadership inner">
				<div class="flex-container">

			<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="team-member">
				<div>
					<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
					<div><h3 class="name"><?php the_field('name'); ?></h3></div>
					<h4><?php the_field('title'); ?></h4>
					<p><?php the_field('sub-title'); ?></p>
				</div>

				<div>
					<?php the_field('bio'); ?>
				</div>
			</div>

			<?php endwhile; wp_reset_query(); ?>

				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
