<?php
/**
 * Template Name: Link Rows
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

        <section id="links-content">
            <div class="container-fluid body">

                <div class="container page">
                    <?php the_title( '<h1 class="hero">', '</h1>' ); ?>
                    <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
            ?>

                    <div class="ss-links">

                        <?php if( have_rows('file_rows') ): ?>

                        <?php while ( have_rows('file_rows') ): the_row(); $files++;  ?>
                        <div class="link-row border-top">
                            <div class="link-row-h"><?php the_sub_field('row_title'); ?></div>
                            <a href="<?php the_sub_field('pdf_link'); ?>" target="_blank">
                                <button type="button" class="btn btn-red">Download File</button></a>
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