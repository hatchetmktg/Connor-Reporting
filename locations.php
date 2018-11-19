<?php 
// Template Name: Locations Page

get_header();
?>

<?php get_template_part('template-parts/page-title'); ?>

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

<?php get_template_part('template-parts/blog-preview'); ?>
<?php get_footer(); ?>