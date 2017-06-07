<?php
/**
 * The template for displaying the News page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main news-main" role="main">

			<section class="page-header">
				<div class="inner">
					<h1>In The News</h1>
				</div>
			</section>

			<section class="news inner">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="news-block">
						<div class="news-image">
							<?php the_field('news-image'); ?>
						</div>

						<div>
							<p class="news-title"><?php the_field('title'); ?></p>
							<p class="news-date"><?php the_field('publication'); ?> - <?php echo get_the_date( get_option('date_format') ); ?></p>
						</div>

						<div>
							<p><?php the_field('excerpt'); ?></p>
							<a class="read-more-news-link" href="<?php the_field('link'); ?>"><div class="read-more-arrow"></div>Read the article</a>
						</div>
					</div>





					

				<?php endwhile; ?>

					<nav class="news-nav">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
					</nav>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
