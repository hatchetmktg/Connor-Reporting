<?php 
// Template Name: Home Page

get_header();
?>




<!-- Hero -->
<section id="hero">


    <div class="owl-carousel hero-bg">
        <div id=indy>
            <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/chicago.jpg" alt=""> -->
        </div>
        <div id="boston">
            <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/la.jpg" alt=""> -->
        </div>
        <div id="miami">
            <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/la.jpg" alt=""> -->
        </div>
        <div id=chicago>
            <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/chicago.jpg" alt=""> -->
        </div>
        <div id="la">
            <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/la.jpg" alt=""> -->
        </div>
    </div>




        <!--  -->


    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Setting The Record Straight</h1>
                    <p>Serving the legal industry for three generations, Connor Reporting has the experience and resources to provide our clients with exemplary litigation support solutions.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>scheduling" class="d-none d-sm-inline">Schedule Now!</a>
                    <a href="tel://(800) 554-3376" class="d-block d-sm-none">Schedule Now!</a>
                </div>
            </div>
        </div>
    </div>





</section>
    <!-- End Hero -->

    <!-- Who We Are-->
    <section id="who-we-are" class="spacer-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1000" >
                    <img class="d-none d-md-block mx-auto" src="<?php bloginfo('template_directory'); ?>/assets/images/hands.jpg">
                </div>
                <div class="col-md-7" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1500">
                    <h2>Who We Are</h2>
                    <hr align="left">
                    <p>Founded in 1962, Connor Reporting has a proud history of providing excellent litigation support solutions. We are honored to offer our clients professional court reporting, videography, document management, and trial presentation services to meet their needs worldwide.</p>
                    <a id="services-anchor" href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="btn btn-primary who-we-are">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who We Are -->

    <?php get_template_part('template-parts/home-services'); ?>

    <!-- Call To Action  -->
    <section id="call-to-action" class="spacer-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 data-aos="fade-up" data-aos-duration="500">Schedule a court reporter, videographer, or other services anytime, anywhere.</h2>
                    <p data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">Call or click below to schedule instantly.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>scheduling" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">Schedule Now!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action  -->

    <!-- Carousel -->
    <section id="carousel" class="spacer-lg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Connor By The Numbers - 2017</h2>
                    
                    <div class="owl-carousel owl-theme stats">
                        <div class="item" data-aos="zoom-in">
                            <h4>4257</h4>
                            <p>Depositions Scheduled</p>
                        </div>
                        <div class="item" data-aos="zoom-in" data-aos-delay="100">
                            <h4>319</h4>
                            <p>Video Conferences</p>
                        </div>
                        <div class="item" data-aos="zoom-in" data-aos-delay="200">
                            <h4>856</h4>
                            <p>Video Depositions</p>
                        </div>
                        <div class="item" data-aos="zoom-in" data-aos-delay="300">
                            <h4>7531</h4>
                            <p>Hours Reported</p>
                        </div>
                        <div class="item" data-aos="zoom-in" data-aos-delay="400">
                            <h4>47</h4>
                            <p>States</p>
                        </div>
                        <div class="item" data-aos="zoom-in" data-aos-delay="500">
                            <h4>416</h4>
                            <p>Cities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- End Carousel -->

    <!-- Case Studies -->
    <!-- <section id="case-studies">
        <div class="container-fluid">
            <div class="row">
                <div id="one" class="col-lg-4">
                    <p>CATEGORY</p>
                    <h3>BAM: Backup Audio
                        <br>Media Guidelines for
                        <br>Court Reporters</h3>
                </div>
                <div id="two" class="col-lg-4">
                    <p>CATEGORY</p>
                    <h3>Picture-in-Picture
                        <br>Video Productions</h3>
                </div>
                <div id="three" class="col-lg-4">
                    <p>CATEGORY</p>
                    <h3>Another Case Study
                        <br>About Something Cool</h3>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Case Studies -->

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
                
                    <div class="col-lg-4" style="background:linear-gradient(rgba(34,79,126,.5), rgba(7,36,64,.9)), url(<?php echo $thumb['0'];?>) no-repeat center center; background-size: cover" data-aos="fade-in" data-aos-duration="1000">
                        <h3 data-aos="fade-right" data-aos-delay="500"><?php the_title(); ?></h3>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" data-aos="fade-right" data-aos-delay="700" >Learn More</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <?php endif; wp_reset_query(); ?>


<div id="shedule-now-button" data-aos="zoom-left" data-aos-delay="2000" data-toggle="modal" data-target="#quickcontact" class="d-none d-md-block">
    <p>30 Second Scheduler</p>
</div>
    

<?php get_footer(); ?>