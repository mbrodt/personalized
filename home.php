<?php get_header(); ?>
<div class="container">
    <section>
        <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
        <a class="col-lg-4 col-sm-6 col-12 mb-4"  href="<?php echo get_permalink(); ?>">
        <div class="blog-card ">
            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="blog-card-content">
                <h2 class="mt-3"><?php the_title(); ?></h2>
                <p class="blog-post-date mt-2">Posted on <?php echo get_the_date(); ?></p>
                <div class="pb-3"><?php the_excerpt(); ?> </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    </a>
</section>
</div>
<?php endif; ?>
<?php get_footer(); ?>