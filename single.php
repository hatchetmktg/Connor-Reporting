<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Connor_Reporting
 */

get_header();
?>

<?php get_template_part('template-parts/page-title'); ?>
<!-- End Header Section -->

<!-- Descriptions Section-->
<section id="descriptions" class="spacer">
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-12" style="margin-bottom: 25px"><h2><?php the_title(); ?></h2></div> -->
			
			<?php get_template_part('template-parts/content-wide'); ?>
			
		</div>
	</div>
</section>
<!-- End Descriptions Section-->

<?php get_template_part('template-parts/blog-preview'); ?>

<?php
get_footer();
