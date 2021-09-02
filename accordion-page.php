<?php
/**
 * Template Name: Accordion Page
 */

get_header(); ?>

<?php if( get_field('hero_image') ): ?>
<header class="hero-header" class="content-area col-12">
    <div id="jumbotron" class="jumbotron-inner">
        <div class="jumbotron-item jumbotron-fluid" style="background-image: url('<?php the_field('hero_image'); ?>');">
        </div>
    </div>

</header>
<?php endif; ?>

<section id="primary" class="content-area col p-0">
    <main id="main" class="site-main" role="main">

        <section id="accordion-content">
            <div class="container-fluid body">
                <div class="container page">
                    <?php the_title( '<h1 class="hero">', '</h1>' ); ?>
                    <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
            ?>

                    <?php if( have_rows('accordion_rows') ): ?>
                    <div id="accordion" class="accordion">
                        <?php while ( have_rows('accordion_rows') ) : the_row(); $collapse++; ?>
                        <div class="card acc mb-0">
                            <div class="card-header collapsed" data-toggle="collapse" href="#collapse<?php echo $collapse; ?>">
                                <a class="card-title">
                                    <?php the_sub_field("accordion_title"); ?>
                                </a>
                            </div>

                            <div id="collapse<?php echo $collapse; ?>" class="collapse"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <?php the_sub_field("accordion_content"); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();