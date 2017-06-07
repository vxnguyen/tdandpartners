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
			
			<section class="front-page-content inner">
				<div class="featured-projects">
					<h2>Featured Projects</h2>

					<div id="slider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="active"></li>
						    <li data-target="#slider" data-slide-to="1"></li>
						</ol>

						<div class="carousel-inner" role="listbox">
							<div class="item active">
						      <a href="<?php echo get_page_link(86); ?>"><?php echo wp_get_attachment_image( 104, full); ?></a>
						    </div>

						    <div class="item">
						      <a href="<?php echo get_page_link(88); ?>"><?php echo wp_get_attachment_image( 101, full); ?></a>
							</div>
						</div>

						<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#slider" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div id="caption-container">
						<div id="slider_captions">
                    		<div>
                        		<div id="caption-0" class="carousel-caption">
                           			<h2>The Station at Grant Avenue</h2>
                           			<p>On June 2, 2016, we broke ground on the largest mixed-use new construction project in Plainfield, New Jersey in over 40 years. The $30 million multi-phase development will consist of the construction of a new 44,000 square foot state-of-the-art facility for ABC Supply Company Inc., a major wholesale supplier of building products, followed by the construction of a 5-story multi-family building comprised of 90 residential units. </p>
                        		</div>

                        		<div id="caption-1" class="carousel-caption">
                            		<h2>The HillTop</h2>
                           			<p>Construction is underway on “The HillTop,” a $200 million dollar redevelopment project that will transform the former Irvington General Hospital site into vibrant community consisting of 700 residential units, a family friendly restaurant, and a pre-school.</p>
                       			</div>
                   		 	</div>
              			</div>
              		</div>
				</div>

				<div class="firm-distinction-sidebar">
					<div class="firm">
						<h2>Firm</h2>
						<p><?php the_field('firm-content'); ?></p>
						<a href="<?php echo get_page_link(14); ?>"><div class="read-more-arrow"></div>Community Impact</a>
					</div>

					<div class="distinction">
						<h2>Distinction</h2>
						<p><?php the_field('distinction-content'); ?></p>
						<a href="<?php echo get_page_link(12); ?>"><div class="read-more-arrow"></div>Our Proven Model</a>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
