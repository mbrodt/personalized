<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">

<section>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <img class="img-fluid" src='<?php
the_post_thumbnail_url(); ?>' alt="">
            <h2 class="text-center mt-3"><?php the_title(); ?></h2>
            <h5 class="blog-post-subheading"><?php echo the_date();?> | <?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name'); ?></h5>
            <div class="blog-post-body">
            <?php the_content(); ?>
            </div>
        </div>
    </div>


</section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>