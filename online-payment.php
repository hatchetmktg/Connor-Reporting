<?php
// Template Name: Onliney Payment  

get_header();

?>

 <!-- Header Section -->
 <?php get_template_part('template-parts/page-title') ?>
<!-- End Header Section -->

<!-- Descriptions Section-->
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
<!-- End Descriptions Section-->

<?php get_template_part('template-parts/call-to-action'); ?>

<!-- Footer -->
<section id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/connor-logo-2.png" class="fluid d-block mx-auto"></a>
            </div>
            <div class="col-lg-5">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>all-locations">Location</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About Us</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>services">Services</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a>
            </div>
            <div id="icons" class="col-lg-4 d-flex justify-content-around">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="row">
            <div id="bottom-row" class="col-lg-6 offset-lg-2">
                <a href="#">2018 Connor Reporting</a>
                <a href="#">Privacy</a>
                <a href="#">Terms and Conditions</a>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->

<!-- Locations Menu -->



    <?php get_template_part('template-parts/locations-menu'); ?>


<!-- Optional JavaScript -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script> -->

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- Custom JS-->
    <script src="<?php bloginfo("template_directory"); ?>/assets/js/main.js"></script>

    <!-- Owl Carousel JS -->
    <script src="<?php bloginfo("template_directory"); ?>/assets/owlcarousel/owl.carousel.min.js"></script>

    <?php get_template_part('template-parts/30-scheduler'); ?>

    <?php get_template_part('template-parts/timeline-script'); ?>




	<?php wp_footer(); ?>
	</body>
</html>