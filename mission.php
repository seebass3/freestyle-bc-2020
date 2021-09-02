<?php
/**
* Template Name: Mission Page
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Video section starts here -->
        <section id="video">
            <div class="container-fluid video">
                <div class="row">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="fbcvideo">
                        <source
                            src="<?php bloginfo('template_url'); ?>/video/Freestyle BC - A Culture of Excellence.mp4"
                            type="video/mp4">
                    </video>

                    <div class="container video-content h-100">
                        <div class="d-flex h-100 text-center align-items-center">
                            <div class="banner-caption">
                                <h1 class="hero text-white">A Culture of Excellence</h1>
                                <h2 class="hero text-white">Freestyle BC in partnership with a provincial network of BC
                                    Freestyle Ski
                                    Clubs, viaSPORT, Canadian Sport Institute, the Regional PacificSport Centers, the
                                    Government of British Columbia, BC Ski Areas, its corporate partners and the
                                    Canadian
                                    Freestyle Ski Association delivers freestyle ski youth participation and performance
                                    programs to help athletes, coaches and volunteers achieve success through healthy
                                    living
                                    in British Columbia.</h2>
                                <a href="https://www.youtube.com/watch?v=ZfwirO10CZQ" target="blank"><button
                                        type="button" class="btn btn-red">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video section ends here -->

        <!-- Mission section starts here -->
        <section id="mission">

            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg order-lg-12" data-aos="fade-up">
                        <img class="banner"
                            src="<?php bloginfo('template_url'); ?>/images/alumni-banner.jpg" alt="Mission Banner" loading="lazy">
                            <div class="thumbnail-m-caption">
                                Mount Washington and Freestyle BC Alumni Cassie Sharpe, reigning Olympic champion in
                                women's halfpipe.
                            </div>
                    </div>

                    <div class="col-lg order-lg-1" data-aos="fade"  data-aos-delay="300">
                        <div class="banner-caption p-5">
                            <h1 class="hero">Mission</h1>
                            <h2 class="hero">To place athletes on the Canadian National Team who ultimately win
                                medals at the highest level through high quality programming and sport
                                development.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-lg" data-aos="fade-up">
                        <img class="banner"
                            src="<?php bloginfo('template_url'); ?>/images/vision-img.jpg" alt="Vision Banner" loading="lazy">
                    </div>

                    <div class="col-lg" data-aos="fade" data-aos-delay="300">
                        <div class="banner-caption p-5 mx-lg-5">
                            <h1 class="hero">Vision</h1>
                            <h2 class="hero">To be recognized as the leading Provincial Sport Organization in
                                Canada.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters align-items-center">
                    <div class="col-lg order-lg-12" data-aos="fade-up">
                        <img class="banner"
                            src="<?php bloginfo('template_url'); ?>/images/strategic-plan-img.jpg" alt="Values Banner" loading="lazy">
                    </div>

                    <div class="col-lg order-lg-1" data-aos="fade" data-aos-delay="300">
                        <div class="banner-caption p-5">
                            <h1 class="hero">Values</h1>
                            <h2 class="hero">Innovation &bull; Excellence &bull; Build Community &bull; Fun
                                &bull;
                                Integrity</h2>
                            <a
                                href="https://freestylebc.ski/wp-content/uploads/2019/09/FBC-Strategic-Overview-2019-2023.pdf"><button
                                    type="button" class="btn btn-red">Strategic Plan</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mission section ends here -->


    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();