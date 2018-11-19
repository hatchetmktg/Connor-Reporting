<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Connor_Reporting
 */

?>

<!-- Footer -->
<section id="footer">
    <div class="container-fluid" data-aos="fade-in" data-aos-duration="1000">
        <div class="row">
            <div class="col-lg-2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/connor-logo-2.png" class="fluid d-block mx-auto"></a>
            </div>
            <div class="col-lg-5">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>all-locations">Locations</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About Us</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services-anchor">Services</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a>
            </div>
            <div id="icons" class="col-lg-4 d-flex justify-content-around">
                <a href="https://www.facebook.com/connorreporting/"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/ConnorReports"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/connor-reporting"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/UC4kvgzbZ2P5p5VVNTdrMfHQ"><i class="fab fa-youtube"></i></a>
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

<!-- End Locations Menu -->

<!-- Search Modal -->
<div class="search" id="search">
  
  <div class="search-box">
  <div class="search-content">
    <h2>What are you looking for?</h2>
    <?php get_search_form( $echo = true );?>
  </div>
    
  </div>

</div>


<!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <!-- Owl Carousel JS -->
    <script src="<?php bloginfo("template_directory"); ?>/assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php bloginfo("template_directory"); ?>/assets/js/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- Custom JS-->
    <script src="<?php bloginfo("template_directory"); ?>/assets/js/main.js"></script>

    

    <?php get_template_part('template-parts/30-scheduler'); ?>

    <?php get_template_part('template-parts/timeline-script'); ?>

    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us13.list-manage.com","uuid":"989b96d3980835477280c6a8c","lid":"e01f7d261d"}) })</script>




	<?php wp_footer(); ?>
    <script type="text/javascript">
_linkedin_partner_id = "501226";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=501226&fmt=gif" />
</noscript>
	</body>
</html>