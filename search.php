<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Connor_Reporting
 */

get_header();
?>

<section id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'connor_reporting' ), '<span>' . get_search_query() . '</span>' );
				?></h2>
            </div>
        </div>
    </div>
    <a data-toggle="modal" data-target="#quickcontact">Schedule a deposition Today</a>
</section>


<section id="loop" class="spacer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>