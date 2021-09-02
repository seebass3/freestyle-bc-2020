<?php
/**
 * Template Name: Club Finder Page
 */

get_header(); ?>

<iframe id="club-map"frameborder="0" scrolling="no" src="https://clubs.freestylebc.ski/" title="Club Finder Map"
        class="w-100 overflow-hidden"></iframe>

<section id="primary" class="content-area col p-0">
        <main id="main" class="site-main" role="main">
                <div class="container-fluid body">

                        <div class="container page">
                                <?php the_title( '<h1 class="hero">', '</h1>' ); ?>
                                <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.?>
                        </div>
                </div>

        </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();