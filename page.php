<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Connor_Reporting
 */

get_header();?>
  <!-- Header Section -->
<?php get_template_part('template-parts/page-title') ?>
<!-- End Header Section -->

<!-- Descriptions Section-->
<section id="descriptions" class="spacer">
	<div class="container">
		<div class="row">
			<?php get_sidebar(); ?>
			<?php get_template_part('template-parts/content'); ?>
		</div>
	</div>
</section>
<!-- End Descriptions Section-->

<?php get_template_part('template-parts/call-to-action'); ?>

<?php get_footer(); ?>

