<?php
/**
 * Template Name: Accordion with Tabs
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

                    <?php if( have_rows('accordion_section') ): ?>
                    <div id="accordion" class="accordion">
                        <?php while ( have_rows('accordion_section') ) : the_row(); $collapse++; ?>
                        <div class="card acc mb-0">
                            <div class="card-header collapsed" data-toggle="collapse"
                                href="#collapse<?php echo $collapse; ?>">
                                <a class="card-title">
                                    <?php the_sub_field("accordion_header"); ?>
                                </a>
                            </div>



                            <div id="collapse<?php echo $collapse; ?>" class="collapse" data-parent="#accordion">
                                <?php if ( have_rows('accordion_content') ) : the_row(); ?>
                                <div class="card-body">
                                    <?php if( have_rows('tab') ) { ?>
                                    <ul class="nav" id="tab" role="tablist">
                                        <?php $i=0; while ( have_rows('tab') ) : the_row(); ?>
                                        <?php $string = sanitize_title( get_sub_field('tab_name') );?>
                                        <li class="category-item" role="tab" <?php if ($i==0) { ?>class="active" <?php } ?>>
                                            <a class="category-button <?php if ($i==0) { ?>active<?php } ?>"
                                                id="<?php echo $string ?>-tab" aria-controls="<?php echo $string ?>"
                                                role="tab" data-toggle="tab"
                                                href="#<?php echo $string ?><?php echo $collapse; ?>"><?php the_sub_field('tab_name'); ?></a>
                                        </li>
                                        <?php $i++; endwhile; ?>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <?php $i=0; while ( have_rows('tab') ) : the_row(); ?>
                                        <?php $string = sanitize_title( get_sub_field('tab_name') );?>
                                        <div role="tabpanel"
                                            class="tab-pane text-left fade <?php if ($i==0) { ?>show active<?php } ?>"
                                            id="<?php echo $string; ?><?php echo $collapse; ?>">
                                            <?php the_sub_field("tab_content"); ?>
                                        </div>
                                        <?php $i++; endwhile; ?>
                                    </div>
                                    <?php } else { ?>
                                        <?php the_sub_field("accordion_main_content"); ?>
                                        <?php } ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
        </section>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();