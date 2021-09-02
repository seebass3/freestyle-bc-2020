<?php
/**
* Template Name: Girlstylerz Page
 */

get_header(); ?>

<?php if( get_field('hero_image') ): ?>
<header class="hero-header" class="content-area col-12" data-aos="fade-up">
    <div id="jumbotron" class="jumbotron-inner">
        <div class="jumbotron-item jumbotron-fluid" style="background-image: url('<?php the_field('hero_image'); ?>');">
        </div>
    </div>

</header>
<?php endif; ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Intro text section starts here -->
        <section id="intro-text" class="bg-light">
            <div class="container pt-5 pb-4">
                <div class="row" data-aos="fade-up">
                    <div class="col">
                        <h1 class="hero">Girlstylerz</h1>
                        <h2 class="hero">Girlstylerz caters to athletes who identify as female and
                            can operate either as a part of Fundamentalz and Freestylerz or parallel to these,
                            as a separate program. This should be based on the individual club’s capacity,
                            philosophy and goals. It focuses on all freestyle disciplines - technical skiing,
                            moguls, slopestyle, half pipe and big air – and participants should be provided with
                            an introduction to competition at regional and provincial level events. The program
                            should also focus on offering a safe and accessible introduction for girls to
                            off-season training opportunities including water ramp, air bag, trampoline and
                            dryland training. Upon entering the program, participants should already be strong
                            intermediate skiers who can ski parallel on a blue run, load/unload the ski lift
                            independently and manage their own equipment.
                            <br>
                            <br>
                            The essence of the Girlstylerz program and what makes it an exceptional experience
                            for young female athletes, is the opportunity to participate in the various
                            Girlstylerz workshops. These workshops have been developed by educators and are
                            catered and adapted to each group by the coach. They include valuable themes that
                            support holistic athlete development including goal-setting, fear management,
                            visualization and team dynamic strategies.</h2>
                        <a href="https://www.youtube.com/watch?v=Q8Gz8d5uo2A" target="blank"><button type="button"
                                class="btn btn-red">Learn More</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro text section ends here -->

        <!-- Mission section starts here -->
        <section id="mission">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg order-lg-12" data-aos="fade-up">
                        <img class="banner"
                            src="<?php bloginfo('template_url'); ?>/images/GSz-Mission.jpg" alt="Mission Banner" loading="lazy">
                    </div>

                    <div class="col-lg order-lg-1" data-aos="fade" data-aos-delay="300">
                        <div class="banner-caption p-5">
                            <h1 class="hero">Mission</h1>
                            <h2 class="hero">We offer athletes who identify as female the opportunity to participate and
                                progress in the sport of freestyle skiing in a fun, safe and positive environment.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-lg" data-aos="fade-up">
                        <img class="banner"
                            src="<?php bloginfo('template_url'); ?>/images/GSz-Vision.jpg" alt="Vision Banner" loading="lazy">
                    </div>

                    <div class="col-lg" data-aos="fade" data-aos-delay="300">
                        <div class="banner-caption p-5 mx-lg-5">
                            <h1 class="hero">Vision</h1>
                            <h2 class="hero">To elevate and empower female athletes through the sport of Freestyle
                                Skiing and to be a leader in program development within Freestyle Canada.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters align-items-center">
                    <div class="col-lg order-lg-12" data-aos="fade-up">
                        <img class="banner"
                            src="<?php bloginfo('template_url'); ?>/images/GSz-Values.jpg" alt="Values Banner" loading="lazy">
                    </div>

                    <div class="col-lg order-lg-1" data-aos="fade" data-aos-delay="300">
                        <div class="banner-caption p-5">
                            <h1 class="hero">Values</h1>
                            <h2 class="hero">Positivity &bull; Respect &bull; Inclusiveness &bull; Safety &bull;
                                Empowerment
                                &bull;
                                Integrity</h2>
                            <a href="https://freestylebc.ski/wp-content/uploads/2020/01/Girlstylerz-Manual.pdf"><button
                                    type="button" class="btn btn-red">Girlstyerz Manual</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mission section ends here -->

        <div class="container-fluid pb-3">
            <div class="item">
                <div class="row resources">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item" data-aos="fade-up">
                        <div class="dummy"></div>
                        <a href="https://www.youtube.com/watch?v=Eim_N49m4eg" target="blank">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/spring-camp.jpg');">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item" data-aos="fade-up">
                        <div class="dummy"></div>
                        <a href="https://www.youtube.com/watch?v=5nddmfOlC7Q" target="blank">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/ramp-camp.jpg');">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 item-item" data-aos="fade-up">
                        <div class="dummy"></div>
                        <a href="https://www.instagram.com/tv/CCHUH83DV67/?utm_source=ig_web_copy_link" target="blank">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('template_url'); ?>/images/goggle-challenge.jpg');">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resources section starts here -->
        <section id="gsz-resources" class="bg-light">
            <div class="container-fluid p-5" data-aos="fade" data-aos-delay="300">
                <h1 style="text-align:center; margin-top:0;">Resources</h1>
                <div class="flex-row partners">
                    <div class="d-flex partners flex-wrap justify-content-center">

                        <a href="https://womenandsport.ca/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                                src="<?php bloginfo('template_url'); ?>/images/cwas-logo-header.png" loading="lazy"
                                height="40" alt="Women and Sport Logo"></a>


                        <a href="https://sportforlife.ca/women-and-girls/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                                src="<?php bloginfo('template_url'); ?>/images/sport-for-life-logo.png" loading="lazy"
                                height="60" alt="Sport for Life Logo"></a>


                        <a href="https://www.viasport.ca/inclusion/women-girls" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                                src="<?php bloginfo('template_url'); ?>/images/Viasport-Logo.png" loading="lazy"
                                height="40" alt="ViaSport Logo"></a>


                        <a href="https://jumpstart.canadiantire.ca/pages/keeping-girls-in-sport" target="_blank" rel="noreferrer noopener"
                            class="p-logo"><img src="<?php bloginfo('template_url'); ?>/images/jumpstart-logo.png"
                                loading="lazy" height="80" alt="Jumpstart Logo"></a>

                        <a href="https://fastandfemale.com/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                                src="<?php bloginfo('template_url'); ?>/images/fast-and-female-logo.png" loading="lazy"
                                height="70" alt="Fast and Female Logo"></a>

                    </div>
                </div>
            </div>
        </section>

        <!-- Club programs section starts here -->
        <section id="gsz-clubs">
            <div class="container py-5" data-aos="fade-up">
                <h1 class="hero text-center mb-5 pb-1">Club Programming</h1>
                <div class="flex-row partners">
                    <div class="d-flex partners flex-wrap justify-content-center">

                        <a href="http://vancouverfreestyle.com/girlstylerz/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                                src="<?php bloginfo('template_url'); ?>/images/FV-logo.png" loading="lazy" height="125"
                                alt="Freestyle Vancouver Logo"></a>

                        <a href="https://www.ssfreestyle.com/about/winter/gteam" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                                src="<?php bloginfo('template_url'); ?>/images/SSF-logo.png" loading="lazy" height="75"
                                alt="Silver Star Freestyle Logo"></a>

                    </div>
                </div>
            </div>
        </section>
        <!-- Club programs section ends here -->


    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();