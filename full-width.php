<?php 
// Template Name: Full Width

get_header();

?>

<?php get_template_part('template-parts/page-title'); ?>

<section id="full-width" class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
				
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>