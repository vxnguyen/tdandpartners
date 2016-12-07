<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main projects-main" role="main">

			<section class="project inner">
				<div class="project-image">
					<?php echo wp_get_attachment_image( get_field('image'), 'full'); ?>
					<div class="project-location">
						<h2><?php the_field('name'); ?></h2>
						<p><?php the_field('location'); ?></p>
					</div>
				</div>

				<div class="project-content">
					<div class="project-sidebar-content">
						<?php the_field('sidebar-content'); ?>
					</div>
					<div>
						<?php the_field('main-content'); ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
