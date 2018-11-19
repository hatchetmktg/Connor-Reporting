<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Connor_Reporting
 */

get_header();
?>

<section id="header" style="background:linear-gradient(rgba(7,36,64,.4), rgba(7,36,64,.4)), url(<?php echo $thumb['0'];?>) no-repeat center center; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>404 ERROR</h2>
            </div>
        </div>
    </div>
    <a href="#" data-toggle="modal" data-target="#quickcontact">30 Second Scheduler</a>
</section>

<section id="404" class="spacer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">This page cannot be located.</h1>
			</div>
		</div>
	</div>
</section>



<section id="footer" class="fixed-bottom">
<div class="container-fluid">
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




<?php wp_footer(); ?>
</body>
</html>
