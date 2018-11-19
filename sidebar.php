<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Connor_Reporting
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-lg-4 sidebar d-none d-md-block">

	<h3 id="list">Services</h3>
	<hr align="left">
	<ul>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>services/court-reporting/"><li>Court Reporting</li></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>services/legal-videography/"><li>Legal Videography</li></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>trial-presentation"><li>Trial Presentation</li></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>services/video-conferencing/"><li>Video Conferencing</li></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>services/document-management/"><li>Document Management</li></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>services/global-reporting/"><li>Global Reporting</li></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>services/technology/"><li>Technology</li></a>
	</ul>

	 <?php 
        $blog_posts = array(
            'posts_per_page'   => '1',
            'order '           => 'ASC'
        );

        $blog_query = new WP_Query($blog_posts);
    ?>

    <?php 
        if($blog_query->have_posts() ):
    ?>

	<h3 id="news">Connor News</h3>
	<hr align="left">
	<?php while($blog_query->have_posts() ): $blog_query->the_post(); ?>
	<a href="<?php echo get_post_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
	<?php the_excerpt(); ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</div>