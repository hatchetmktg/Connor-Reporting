<?php 
// Template Name: Team Page

get_header();

?>

<?php get_template_part('template-parts/page-title'); ?>

<section id="team-members" class="spacer">
    <div class="container">
        <div class="row">
            

                <?php 
                    $args = array('post_type' => 'team_member', 'order' => 'ASC');
                    $team_loop = new WP_Query($args);
                ?>

                <?php if($team_loop -> have_posts() ) : while($team_loop -> have_posts() ): $team_loop -> the_post(); ?>
                <div class="col-md-4">
                    <img src="<?php the_field('headshot'); ?>" class="img-fluid" alt="">
                    <h2 class="text-center"><?php the_title(); ?></h2>
                    <p class="text-center"><?php the_field('title'); ?></p>
                </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>

            
        </div>
    </div>
</section>

<?php get_footer(); ?>