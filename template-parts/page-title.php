
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<section id="header" style="background:linear-gradient(rgba(7,36,64,.4), rgba(7,36,64,.4)), url(<?php echo $thumb['0'];?>) no-repeat center center; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    <a href="#" data-toggle="modal" data-target="#quickcontact" class="d-none d-md-block">30 Second Scheduler</a>
    <a href="tel://1-888-283-1161" class="d-block d-md-none">1-888-283-1161</a>
</section>