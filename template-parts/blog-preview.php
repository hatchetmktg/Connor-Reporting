<?php 
        $blog_posts = array(
            'posts_per_page'   => '3',
            'order '           => 'ASC'
        );

        $blog_query = new WP_Query($blog_posts);
    ?>

    <?php 
        if($blog_query->have_posts() ):
    ?>

    <section id="case-studies">
        <div class="container-fluid">
            <div class="row">
                <?php while($blog_query->have_posts() ): $blog_query->the_post(); ?>

                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                
                    <div class="col-lg-4" style="background:linear-gradient(rgba(34,79,126,.5), rgba(7,36,64,.9)), url(<?php echo $thumb['0'];?>) no-repeat center center; background-size: cover">
                        <h3><?php the_title(); ?></h3>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" >Learn More</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <?php endif; wp_reset_query(); ?>