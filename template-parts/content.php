<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Connor_Reporting
 */

?>

<div class="col-lg-8">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>