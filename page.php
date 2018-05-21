<?php get_header(); ?>
<div class="container container-small mt-3">
    <section class="row">
        <div id="about-me" class="mx-auto">
        <h1>About me</h1>
        </div>
    </section>
    <section class="row ">
        <div class="col-12 col-lg-6 mx-auto">
        <p class="about-me-text">
        <?php echo get_post_field('post_content', $post->ID); ?>
</p>
        </div>
        <div class="col-12-col-lg-6 mx-auto">
            <div class="row">
                <div class="col-6 col-sm-6">
                    <img class="tool" src="<?php echo
get_stylesheet_directory_uri(); ?>/assets/images/js.svg" alt="">
                </div>
                <div class="col-6 col-sm-6">
                    <img class="tool" src="<?php echo
get_stylesheet_directory_uri(); ?>/assets/images/vue.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6">
                    <img class="tool" src="<?php echo
get_stylesheet_directory_uri(); ?>/assets/images/vscode.svg" alt="">
                </div>
                <div class="col-6 col-sm-6">
                    <img class="tool" src="<?php echo
get_stylesheet_directory_uri(); ?>/assets/images/wp.svg" alt="">
                </div>
            </div>
        </div>
        </section>
        <section id="social">
            <a href="https://www.facebook.com/mads.brodt"><img src="<?php echo
            get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
            <a href="https://twitter.com/madsbrodt"><img src="<?php echo
            get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a>
            <a href="http://github.com/mbrodt"><img src="<?php echo
            get_stylesheet_directory_uri(); ?>/assets/images/github.svg" alt=""></a>
        </section>
</div>
<?php get_footer(); ?>