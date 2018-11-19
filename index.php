<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Connor_Reporting
 */

get_header();
?>


<section id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>Latest News From Connor</h2>
            </div>
        </div>
    </div>
    <a data-toggle="modal" data-target="#quickcontact">Schedule a deposition Today</a>
</section>

<section id="loop" class="spacer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
				
					if ( have_posts() ) :
						while ( have_posts() ) : the_post(); ?>
							
								<a href="<?php echo get_post_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<?php the_content(); ?>
							
						<?php endwhile; // end while
						
					endif; // end if
				?>
<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
				
			</div>
			
		</div>
	</div>
</section>


<?php
get_footer(); ?>
