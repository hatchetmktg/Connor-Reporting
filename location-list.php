<?php 
// Template name: All Locations

get_header();
?>
<?php get_template_part('template-parts/page-title'); ?>

<section id="locations-list" class="spacer">
    <div class="container">
        <div class="row">
            <?php get_sidebar(); ?>
            <div class="col-md-8">
            <p>Connor Reporting can schedule a court reporter, videographer, or other services anytime, anywhere across the United States. We can also help you find a location for a deposition. </p>
                <?php if(have_rows('locations')): ?>
                    <div class="accordion" id="accordionExample">
                        <?php while(have_rows('locations')) : the_row(); ?>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#city-<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php the_sub_field('location_title'); ?><i class="fas fa-caret-down ml-auto "></i>
                                    </button>
                                    
                                </h5>
                                
                                </div>

                                <div id="city-<?php echo get_row_index(); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                <p>To schedule a deposition, give us a call at <a href="tel://1-888-283-1161">1-888-283-1161</a> or <a href="<?php echo esc_url( home_url( '/' ) ); ?>scheduling">click here</a> to schedule online.</p>
                                
                                <?php the_sub_field('cities'); ?>
                                    
                                </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>