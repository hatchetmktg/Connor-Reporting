<?php 
// Template Name: Contact Page
get_header();
?>

<?php get_template_part('template-parts/page-title'); ?>

<section id="contact-form" class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 contact-sidebar">
                <h4>Get In Touch:</h4>
                <a href="tel://1-888-283-1161"><h3>1-888-283-1161</h3></a>
                <hr align="left">
                <address style="margin-bottom: 45px">111 Monument Cir <br>Suite 4350 <br>Indianapolis, IN 46204</address>

                <h3 id="list">Services</h3>
                <hr align="left">
                <ul>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>services/court-reporting/"><li>Court Reporting</li></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>services/legal-videography/"><li>Legal Videography</li></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>court-reporting-software/"><li>Court Reporting Software</li></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>services/video-conferencing/"><li>Video Conferencing</li></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>services/trial-preparation/"><li>Trial Preparation</li></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>services/global-reporting/"><li>Global Reporting</li></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>services/technology/"><li>Technology</li></a>
                </ul>
            </div>
            <div class="col-md-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
                <?php gravity_form( 4, false, false, false, '', false ); ?>
            </div>
        </div>
    </div>
</section>

<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12266.77170491891!2d-86.16585470356681!3d39.76900240534556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b50b93afa265f%3A0x7f320128f72b05e3!2sConnor+Court+Reporting!5e0!3m2!1sen!2sus!4v1533738017964" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php get_footer(); ?>