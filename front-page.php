<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-front-page" role="main">
			<section class="hero">
				<div class="inner">
					<div class="hero__content">
						<h1><?php echo get_bloginfo('description'); ?></h1>
						<p>Our goal is to eliminate fundamental living gaps by transforming blighted properties into developments that deliver real economic value to communities.</p>
					</div>
				</div>
			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
