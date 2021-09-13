<?php
/**
 * Template Name: Resource Page
 */

get_header(); ?>

<?php if( get_field('hero_image') ): ?>
<header class="hero-header" class="content-area col-12">
    <div id="jumbotron" class="jumbotron-inner">
        <div class="jumbotron-item jumbotron-fluid" style="background-image: url('<?php the_field('hero_image'); ?>');">
        </div>
        <div class="jumbotron-caption">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) {
    ?>
                <div class="entry-header">
                    <?php the_title( '<h1 class="hero-banner">', '</h1>' ); ?>
                </div>
                <?php } ?>

        </div>
    </div>

</header>
<?php endif; ?>


<section id="primary" class="content-area col">
    <main id="main" class="site-main" role="main">

        <div class="container-fluid pb-3">

            <div class="item">
                <div class="row resources">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item">
                        <div class="dummy"></div>
                        <a href="/resources/manuals">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/manuals-img.jpg');">
                                <div class="bg"><span class="thumbnail-text">
                                    <h1>Manuals</h1>
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item">
                        <div class="dummy"></div>
                        <a href="/resources/events">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/events-img.jpg');">
                                <div class="bg"><span class="thumbnail-text">
                                    <h1>Events</h1>
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item">
                        <div class="dummy"></div>
                        <a href="/resources/return-to-sport">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/r2p-img.jpg');">
                                <div class="bg"><span class="thumbnail-text">
                                    <h1>Return to Sport</h1>
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item">
                        <div class="dummy"></div>
                        <a href="/resources/bc-team">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/bc-team-img.jpg');">
                                <div class="bg"><span class="thumbnail-text">
                                    <h1>BC Team</h1>
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item">
                        <div class="dummy"></div>
                        <a href="/coaching-program/">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/coach-img.jpg');">
                                <div class="bg"><span class="thumbnail-text">
                                    <h1>Coaching</h1>
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item">
                        <div class="dummy"></div>
                        <a href="https://freestylecanada.ski/a/en/resources/judges/index.html" target='blank'>
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/officials-img.jpg');">
                                <div class="bg"><span class="thumbnail-text">
                                    <h1>Judges & Officials</h1>
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();