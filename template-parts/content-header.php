<?php
/**
 * Template part for displaying the page header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdandpartners
 */

?>

<section class="page-header">
	<div class="inner">
		<h1><?php echo get_the_title(); ?></h1>

		<?php if( get_field('page-description') ): ?>
			<p><?php the_field('page-description'); ?></p>
		<?php endif; ?>
	</div>
</section>